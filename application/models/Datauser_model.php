 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datauser_model extends CI_Model
{
    private $_table = "user";

    // public $id_user;
    public $nama_user;
    public $passw;
    public $status_user;

    public function rules()
    {
        return [
            ['field' => 'nama_user',
            'label' => 'Nama_user',
            'rules' => 'required'],

            ['field' => 'passw',
            'label' => 'Passw',
            'rules' => 'required'],

            ['field' => 'status_user',
            'label' => 'Status_user',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_user = $post["nama_user"];
        $this->passw = $post["passw"];
        $this->status_user = $post["status_user"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->nama_user = $post["nama_user"];
        $this->passw = $post["passw"];
        $this->status_user = $post["status_user"];
        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}