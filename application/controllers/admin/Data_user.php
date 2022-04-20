<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("datauser_model");
        $this->load->library('form_validation');
        if($this->session->userdata('STATUS_USER') != 'ADMIN'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Anda Belum Login !!!
                </div>');
            redirect('Welcome');
        } 
    }

    public function index()
    {
        $data["data_user"] = $this->datauser_model->getAll();
        $this->load->view("admin/datauser/list", $data);
    }

    public function add()
    {
        $datauser = $this->datauser_model;
        $validation = $this->form_validation;
        $validation->set_rules($datauser->rules());

        if ($validation->run()) {
            $datauser->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/datauser/new_form");
    }

    public function edit($id = null)
    {
      if (!isset($id)){
            $id = $this->input->post('id');
        }

        if (!isset($id)) redirect('admin/data_user');
       
        $datauser = $this->datauser_model;
        $validation = $this->form_validation;
        $validation->set_rules($datauser->rules());

        if ($validation->run()) {
            $datauser->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datauser"] = $datauser->getById($id);
        if (!$data["datauser"]) show_404();
        
        $this->load->view("admin/datauser/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->datauser_model->delete($id)) {
            redirect(site_url('admin/data_user'));
        }
    }
}