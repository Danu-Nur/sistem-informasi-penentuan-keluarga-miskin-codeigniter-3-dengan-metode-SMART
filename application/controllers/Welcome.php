<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct()     
	{         
		parent::__construct();         
		$this->load->model("Login_model");       
		$this->load->library('form_validation');     
	} 

	public function index()
	{
		$this->form_validation->set_rules('NAMA_USER', 'USERNAME', 'required',['required' => 'Username wajib diisi !!!']);
		$this->form_validation->set_rules('PASSW', 'PASSWORD', 'required',['required' => 'Password wajib diisi !!!']);
		if($this->form_validation->run()==FALSE)
		{
			$data = array(
				'judul' => 'LOGIN'
			);
			$this->load->view('welcome_message',$data);
		}else{
			$auth = $this->Login_model->cek_login();
			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Username atau Password anda salah !!! </div>');
				redirect('Welcome');
			}else{
				$array = array(
					'ID_USER' => $auth->ID_USER,
					'NAMA_USER'=> $auth->USRNAMA,
					'STATUS_USER'=> $auth->STATUS_USER );
				
				$this->session->set_userdata( $array );
				

				switch ($auth->STATUS_USER) {
					case 'ADMIN' : redirect('Home');
						break;
					
					case 'PEMDES' : redirect('pemdes/Home');
						break;

						default : ;break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}

	public function rules(){ 
        return [
			['field' => 'EMAIL',
			'label' => 'Email',
			'rules' => 'required'],

			['field' => 'USRNAMA',
			'label' => 'Usernama',
			'rules' => 'required'],

			['field' => 'PASWORD',
			'label' => 'Password',
			'rules' => 'required']
        ];
    }

    
}
