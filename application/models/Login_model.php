<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
	public $_table = 'tb_user';
    public $idm = 'ID_USER';

	public function cek_login()
	{
		$USRNAMA = set_value('NAMA_USER');
		$PASWORD = set_value('PASSW');

		$result   = $this->db->where('NAMA_USER',$USRNAMA)
							->where('PASSW',$PASWORD)
							->limit(1)
							->get('user');

		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function add($data)
    {
        $this->db->insert($this->_table, $data);
    }
}

?>
