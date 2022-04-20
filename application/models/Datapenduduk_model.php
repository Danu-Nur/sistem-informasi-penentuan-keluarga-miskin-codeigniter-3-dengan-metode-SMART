<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datapenduduk_model extends CI_Model
{
    private $_table = "penduduk";

    public $nama_penduduk;
    public $nik;
    public $jen_kel;
    public $alamat;

    public function rules()
    {
        return [

            ['field' => 'nama_penduduk',
            'label' => 'Nama_penduduk',
            'rules' => 'required'],

            ['field' => 'nik',
            'label' => 'Nik',
            'rules' => 'required'],

            ['field' => 'jen_kel',
            'label' => 'Jen_kel',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getNew()
    {
        $this->db->order_by('ID_PENDUDUK', 'desc');
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        // $id_penduduk;
        return $this->db->get_where($this->_table, ["id_penduduk" => $id])->result_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_penduduk = $post["nama_penduduk"];
        $this->nik = $post["nik"];
        $this->jen_kel = $post["jen_kel"];
        $this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $id_penduduk;
        $post = $this->input->post();
        $this->id_penduduk = $post["id"];
        $this->kode_alternatif = $post["kode_alternatif"];
        $this->nama_penduduk = $post["nama_penduduk"];
        $this->nik = $post["nik"];
        $this->jen_kel = $post["jen_kel"];
        $this->alamat = $post["alamat"];

        $this->db->update($this->_table, $this, array('id_penduduk' => $post['id']));
    }

    public function delete($id)
    {
        $id_penduduk;
        return $this->db->delete($this->_table, array("id_penduduk" => $id));
    }
}