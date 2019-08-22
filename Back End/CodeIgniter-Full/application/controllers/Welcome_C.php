<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_C extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Welcome_M');
	}

	public function index()
	{
		redirect(site_url('Welcome_C/Login'));
	}

	public function Login()
	{
		$this->load->view('Template/Login-Register/Header_V');
		$this->load->view('Content/Login-Register/Login_V');
		$this->load->view('Template/Login-Register/Footer_V');
	}

	public function Process_Login()
	{
		
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$cek_login = $this->Welcome_M->Login($email,$password);
		if ($cek_login == true) {
			$_SESSION['akun_user']['status_login'] = TRUE;
			$_SESSION['akun_user']['id_user'] = $cek_login->id_users;
			redirect(site_url('Home_C'));
		} else {
			echo "gagal";
		}
	}

	public function Register()
	{
		$this->load->view('Template/Login-Register/Header_V');
		$this->load->view('Content/Login-Register/Register_V');
		$this->load->view('Template/Login-Register/Footer_V');
	}

	public function Process_Register()
	{
		// mengecek email sudah terdaftar apa belum
		$email = $this->input->post('email');
		$cek_email =  $this->Welcome_M->Cek_Register($email);
		if ($cek_email != true) {
			// mengecek password apa sudah sama atau belum
			$password = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			if ($password == $confirm_password) {
				$data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
				);
				$this->Welcome_M->Register($data);
				redirect(site_url('Welcome_C/Login'));
			} else {
				echo ("password tidak sesuai");
			}
		} else {
			echo ("email sudah terdaftar");
		}


		
		
	}
}
