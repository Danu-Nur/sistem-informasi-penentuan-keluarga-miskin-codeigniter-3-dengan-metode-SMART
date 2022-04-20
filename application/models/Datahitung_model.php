<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datahitung_model extends CI_Model
{
    private $_table = "perhitungan";

    public $id_penduduk;
    public $id_kriteria;
    public $hasil_hitung;

    public function rules()
    {
        return [
            ['field' => 'hasil_hitung',
            'label' => 'hasil_hitung',
            'rules' => 'numeric'],
        ];
    }


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getJoin()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('alternatif', 'alternatif.ID_KRITERIA = perhitungan.ID_KRITERIA');
        $this->db->join('penduduk', 'penduduk.ID_PENDUDUK = alternatif.ID_PENDUDUK');
        $this->db->order_by('perhitungan.HASIL_HITUNG', 'DESC');
        
        return $this->db->get()->result();
    }

    public function getDetail($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('alternatif', 'alternatif.ID_KRITERIA = perhitungan.ID_KRITERIA');
        $this->db->join('penduduk', 'penduduk.ID_PENDUDUK = alternatif.ID_PENDUDUK');
        $this->db->where('penduduk.ID_PENDUDUK', $id);
        
        return $this->db->get()->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_hitung" => $id])->row();
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data)
    {
        
        $this->db->where('id_kriteria', $data['id_kriteria']);
        $this->db->update($this->_table, $data);
    }

    public function cek($data)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_kriteria', $data['id_kriteria']);
        return $this->db->get()->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_hitung" => $id));
    }

    public function cmax($pref)
    {
        $query = "SELECT $pref as maxx FROM alternatif ORDER BY $pref DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function cout($data)
    {
        $prefe = $data['prefe'];
        $id = $data['idpen'];
        $query = "SELECT $prefe FROM alternatif WHERE id_penduduk = '$id' ";
        return $this->db->query($query)->row_array();
    }

    public function cmin($pref)
    {
        $query = "SELECT $pref as minnn FROM alternatif ORDER BY $pref ASC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function bobot()
    {
        $this->db->select('*');
        $this->db->from('bobot_kriteria');
        return $this->db->get()->result_array();
        
    }
}