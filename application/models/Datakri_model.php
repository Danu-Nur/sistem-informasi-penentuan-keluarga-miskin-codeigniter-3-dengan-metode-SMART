 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datakri_model extends CI_Model
{
    private $_table = "alternatif";

    
    public $id_penduduk;
    public $luas_lantai;
    public $jenis_lantai;
    public $jenis_dinding;
    public $tidakada_km;
    public $lampu;
    public $air_minum;
    public $bahan_bakar;
    public $konsumsi_daging;
    public $pakaian;
    public $makan_sehari;
    public $bayar_obat;
    public $penghasilan;
    public $pendidikan;
    public $tabungan;

    public function rules()
    {
        return [
            ['field' => 'luas_lantai',
            'label' => 'Luas_lantai',
            'rules' => 'required'],

            ['field' => 'jenis_lantai',
            'label' => 'Jenis_lantai',
            'rules' => 'required'],

            ['field' => 'jenis_dinding',
            'label' => 'Jenis_dinding',
            'rules' => 'required'],

            ['field' => 'kamar_mandi',
            'label' => 'Kamar_mandi',
            'rules' => 'required'],

             ['field' => 'lampu',
            'label' => 'Lampu',
            'rules' => 'required'],

            ['field' => 'air_minum',
            'label' => 'Airminum',
            'rules' => 'required'],

            ['field' => 'bahan_bakar',
            'label' => 'Bahan_bakar',
            'rules' => 'required'],

            ['field' => 'konsumsi_daging',
            'label' => 'Konsumsi_daging',
            'rules' => 'required'],

             ['field' => 'pakaian',
            'label' => 'Pakaian',
            'rules' => 'required'],

            ['field' => 'makan_sehari',
            'label' => 'Makan_sehari',
            'rules' => 'required'],

            ['field' => 'bayar_obat',
            'label' => 'bayar_obat',
            'rules' => 'required'],

            ['field' => 'penghasilan',
            'label' => 'Penghasilan',
            'rules' => 'required'],

             ['field' => 'pendidikan',
            'label' => 'Pendidikan',
            'rules' => 'required'],

            ['field' => 'tabungan',
            'label' => 'Tabungan',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kriteria" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_penduduk = $post["id_penduduk"];
        $this->luas_lantai = $post["luas_lantai"];
        $this->jenis_lantai = $post["jenis_lantai"];
        $this->jenis_dinding = $post["jenis_dinding"];
        $this->tidakada_km = $post["kamar_mandi"];
        $this->lampu = $post["lampu"];
        $this->air_minum = $post["air_minum"];
        $this->bahan_bakar = $post["bahan_bakar"];
        $this->konsumsi_daging = $post["konsumsi_daging"];
        $this->pakaian = $post["pakaian"];
        $this->makan_sehari = $post["makan_sehari"];
        $this->bayar_obat = $post["bayar_obat"];
        $this->penghasilan = $post["penghasilan"];
        $this->pendidikan = $post["pendidikan"];
        $this->tabungan = $post["tabungan"];

        $this->db->insert($this->_table, $this);

        return $this->db->insert_id();
    }

    public function update()
    {

        $post = $this->input->post();
        $this->id_penduduk = $post["id_penduduk"];
        $this->luas_lantai = $post["luas_lantai"];
        $this->jenis_lantai = $post["jenis_lantai"];
        $this->jenis_dinding = $post["jenis_dinding"];
        $this->tidakada_km = $post["kamar_mandi"];
        $this->lampu = $post["lampu"];
        $this->air_minum = $post["air_minum"];
        $this->bahan_bakar = $post["bahan_bakar"];
        $this->konsumsi_daging = $post["konsumsi_daging"];
        $this->pakaian = $post["pakaian"];
        $this->makan_sehari = $post["makan_sehari"];
        $this->bayar_obat = $post["bayar_obat"];
        $this->penghasilan = $post["penghasilan"];
        $this->pendidikan = $post["pendidikan"];
        $this->tabungan = $post["tabungan"];

        
        $this->db->update($this->_table, $this, array('id_penduduk' => $post['id_penduduk']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kriteria" => $id));
    }

    public function getId($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_penduduk', $id);
        return $this->db->get();
    }

}