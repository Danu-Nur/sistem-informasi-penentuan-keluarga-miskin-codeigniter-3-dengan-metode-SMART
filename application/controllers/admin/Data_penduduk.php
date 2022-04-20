<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Datapenduduk_model");
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
        $data["data_penduduk"] = $this->Datapenduduk_model->getAll();
        $this->load->view("admin/datapenduduk/list", $data);
    }

    public function add()
    {
        $datapenduduk = $this->Datapenduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($datapenduduk->rules());

        if ($validation->run()) {
            $datapenduduk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/datapenduduk/new_form");
    }

    public function edit($id = null)
    {
      if (!isset($id)){
            $id = $this->input->post('id');
        }

        if (!isset($id)) redirect('admin/data_penduduk');
        $data["data_penduduk"] = $this->Datapenduduk_model->getAll();
        $datapenduduk= $this->Datapenduduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($datapenduduk->rules());

        if ($validation->run()) {
            $datapenduduk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datapenduduk"] = $datapenduduk->getById($id);
        if (!$data["datapenduduk"]) show_404();
        
        $this->load->view("admin/datapenduduk/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Datapenduduk_model->delete($id)) {
            redirect(site_url('admin/data_penduduk'));
        }
    }
}