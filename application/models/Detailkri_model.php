<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detailkri_model extends CI_Model
{
    private $_table = "bobot_kriteria";

    public $id_bobot;
    public $nama_dk;
    public $jenis_dk;
    public $bobot_dk;

    public function rules()
    {
        return [
            ['field' => 'nama_dk',
            'label' => 'Nama_dk',
            'rules' => 'required'],

            ['field' => 'jenis_dk',
            'label' => 'Jenis_dk',
            'rules' => 'required'],

            ['field' => 'bobot_dk',
            'label' => 'Bobot_dk',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bobot" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_dk= $post["nama_dk"];
        $this->jenis_dk= $post["jenis_dk"];
        $this->bobot_dk = $post["bobot_dk"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $id_bobot;
        $post = $this->input->post();
        $this->id_bobot = $post["id"];
        $this->nama_dk = $post["nama_dk"];
        $this->jenis_dk = $post["jenis_dk"];
        $this->bobot_dk = $post["bobot_dk"];

        $this->db->update($this->_table, $this, array('id_bobot' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bobot" => $id));
    }
}