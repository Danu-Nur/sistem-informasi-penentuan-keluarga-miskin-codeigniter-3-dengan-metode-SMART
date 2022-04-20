<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Detailkri_model");
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
        $data["data_detail"] = $this->Detailkri_model->getAll();
        $this->load->view("admin/datadetail/list", $data);
    }

    public function add()
    {
        $datadetail = $this->Detailkri_model;
        $validation = $this->form_validation;
        $validation->set_rules($datadetail->rules());

        if ($validation->run()) {
            $datadetail->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/datadetail/new_form");
    }

    public function edit($id = null)
    {
      if (!isset($id)){
            $id = $this->input->post('id');
        }

        if (!isset($id)) redirect('admin/data_detail');
        $data["data_detail"] = $this->Detailkri_model->getAll();
        $datadetail= $this->Detailkri_model;
        $validation = $this->form_validation;
        $validation->set_rules($datadetail->rules());

        if ($validation->run()) {
            $datadetail->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datadetail"] = $datadetail->getById($id);
        if (!$data["datadetail"]) show_404();
        
        $this->load->view("admin/datadetail/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Detailkri_model->delete($id)) {
            redirect(site_url('admin/data_detail'));
        }
    }

}