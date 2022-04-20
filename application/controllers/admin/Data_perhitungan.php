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

        if($this->session->userdata('STATUS_USER') != 'ADMIN'){
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
        $this->load->view("admin/dataperhitungan/list", $data);
        
    }

    public function add()
    {
        $data["kri"] = $this->Datakri_model->getAll();
        $data["pen"] = $this->Datapenduduk_model->getNew();
        $dataperhitungan = $this->Datakri_model;
        $validation = $this->form_validation;
        $validation->set_rules($dataperhitungan->rules());

        if ($validation->run()) {
            $idpenduduk = $this->input->post('id_penduduk');
            $cek = $this->Datakri_model->getId($idpenduduk)->result();
            if(count($cek) > 0){
                $dataperhitungan->update();
                $this->hitungSmart($idpenduduk);
                $this->detailHitung($idpenduduk);
            }else{
                $dataperhitungan->save();
                $this->hitungSmart($idpenduduk);
                $this->detailHitung($idpenduduk);
            }
            
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }else {
            $this->load->view("admin/dataperhitungan/new_form",$data);
        }
        
    }

    public function detailHitung($id)
    {
        if (!isset($id)){
            $id = $this->input->post('id');
        }
        if (!isset($id)) redirect('admin/data_perhitungan');
        $data["detail"] = $this->Datahitung_model->getDetail($id);
        $this->load->view("admin/dataperhitungan/detail", $data);
        
    }


    public function edit($id = null)
    {
      if (!isset($id)){
            $id = $this->input->post('id');
        }

        if (!isset($id)) redirect('admin/data_perhitungan');
        $data["kri"] = $this->Datakri_model->getAll();
        $data["pen"] = $this->Datapenduduk_model->getAll();
        $dataperhitungan = $this->Datahitung_model;
        $validation = $this->form_validation;
        $validation->set_rules($dataperhitungan->rules());

        if ($validation->run()) {
            $idpenduduk = $this->input->post('id');
            $dataperhitungan->update();
            $this->hitungSmart($idpenduduk);
            $this->detailHitung($idpenduduk);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dataperhitungan"] = $dataperhitungan->getById($id);
        if (!$data["dataperhitungan"]) show_404();
        
        $this->load->view("admin/dataperhitungan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Datahitung_model->delete($id)) {
            redirect('admin/Data_Perhitungan');
        }
    }

    public function PlaySmart($id)
    {
        $this->hitungSmart($id);
        
        redirect('admin/data_perhitungan');
        
    }

    public function hitungSmart($id = null)
    {
        $p_model = $this->Datakri_model;
        $h_model = $this->Datahitung_model;

        $bobot_preferensi = $h_model->bobot();

        if($id == null){
            $pend = $p_model->getAll();
        }else{
            $pend = $p_model->getId($id)->result_array();
        }
        
        foreach($pend as $p){
            $idk = $p['ID_KRITERIA'];
            $idp = $p['ID_PENDUDUK'];
            $Total = 0;
            foreach ($bobot_preferensi as $b){
                $prf = $b['NAMA_KRITERIA'];
                $data = array(
                    'prefe'=>$prf,
                    'idpen'=>$idp
                );
                $bobot_total = 0;
                foreach ($bobot_preferensi as $btotal) {
                    $bobot_total = $bobot_total + $btotal['BOBOT'];
                }
                $normalisasi = $b['BOBOT'] / $bobot_total;

                $Cout = $h_model->cout($data);
                $Cmin = $h_model->cmin($prf);
                $Cmin2 = $h_model->cmin($prf);
                $Cmax = $h_model->cmax($prf);

                $cminn = $Cmin['minnn'];
                $cminn2 = $Cmin2['minnn'];
                $cmaxx =$Cmax['maxx'];
                $coutt = $Cout[$prf];

                $cost = ($cmaxx - $coutt) / ($cmaxx - $cminn) * 1;

                $nilai = $normalisasi * $cost;

                $Total = $Total + $nilai;
                
    
                
            }
            if ($Total > 0.5) {
                $status = 'LAYAK';
            }else {
                $status = 'TIDAK LAYAK';
            }
            $data2 = array(
                'id_kriteria'=> $idk,
                'hasil_hitung'=> $Total,
                'status'=> $status,
            );
            if(count($h_model->cek($data2)) > 0){
                $h_model->update($data2);
            }else {
                $h_model->save($data2);
                }
            
        }
    }
}