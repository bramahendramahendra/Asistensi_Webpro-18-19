<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_C extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if($_SESSION['akun_user']['status_login'] == TRUE) {
			$this->load->model('Home_M');
		} else {
			redirect(site_url('Welcome_C'));
		}
	}


	
	
	public function index()
	{
		
		// echo $data['first_name'];
		$nama = $this->Home_M->Get_Data_User($_SESSION['akun_user']['id_user']);
		$data = array (
			'id_user' => $_SESSION['akun_user']['id_user'],
			'first_name' => $nama->first_name,
			'last_name' => $nama->last_name,
			'status' => 'Web Developer',
		);
		$this->load->view('Template/Header_V',$data);
		$this->load->view('Content/Home_V',$data);
		$this->load->view('Template/Footer_V',$data);
	}
}
