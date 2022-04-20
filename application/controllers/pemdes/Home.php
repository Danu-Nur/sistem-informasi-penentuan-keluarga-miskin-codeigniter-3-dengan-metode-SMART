<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('STATUS_USER') != 'PEMDES'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				Anda Belum Login !!!
				</div>');
			redirect('Welcome');
		} 
	}
	

	public function index()
	{
		$data['judul'] = 'SPK_KM';
		$this->load->view("pemdes/overview",$data);

	}
}