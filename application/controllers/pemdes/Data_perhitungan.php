<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Datahitung_model");
        $this->load->model("Datakri_model");
        $this->load->model("Datapenduduk_model");
        $this->load->library('form_validation');

        if($this->session->userdata('STATUS_USER') != 'PEMDES'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Anda Belum Login !!!
                </div>');
            redirect('Welcome');
        } 
    }

    public function index()
    {
        $data["data_perhitungan"] = $this->Datahitung_model->getAll();
        $data["join"] = $this->Datahitung_model->getJoin();
        // $data["datahit"] = $this->Datahitung_model->Hitung();
        $this->load->view("pemdes/list", $data);
        
    }

}