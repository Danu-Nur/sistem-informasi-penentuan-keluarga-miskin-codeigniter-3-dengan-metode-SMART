<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Datakri_model");
        $this->load->model("Datapenduduk_model");
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
        $data["data_kriteria"] = $this->Datakri_model->getAll();
        $this->load->view("admin/datakriteria/list", $data);
    }

    public function add()
    {
        $data["pend"] = $this->Datapenduduk_model->getAll();
        $data["dek"] = $this->Detailkri_model->getAll();
        $datakriteria = $this->Datakri_model;
        $validation = $this->form_validation;
        $validation->set_rules($datakriteria->rules());

        if ($validation->run()) {
            $datakriteria->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/datakriteria/new_form");
    }

    public function edit($id = null)
    {
      if (!isset($id)){
            $id = $this->input->post('id');
        }

        if (!isset($id)) redirect('admin/data_kriteria');
        $data["data_kriteria"] = $this->Datakri_model->getAll();
        $data["pen"] = $this->Datapenduduk_model->getAll();
        $data["dek"] = $this->Detailkri_model->getAll();
        $datakriteria = $this->datakri_model;
        $validation = $this->form_validation;
        $validation->set_rules($datakriteria->rules());

        if ($validation->run()) {
            $datakriteria->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datakriteria"] = $datakriteria->getById($id);
        if (!$data["datakriteria"]) show_404();
        
        $this->load->view("admin/datakriteria/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->datakri_model->delete($id)) {
            redirect(site_url('admin/data_kriteria'));
        }
    }
}