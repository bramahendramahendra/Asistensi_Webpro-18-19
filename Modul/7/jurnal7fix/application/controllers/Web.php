<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_web');
  	}

  	public $data = array(
  		"nim" => "130116456",
  		"nama" => "Sageri FR",
  		"kampus"=>"Telkom University"
  	);

	public function index()
	{
		$this->load->view('page_header');
		$this->load->view('page_index');
	}

	public function mahasiswa()
	{
		$data_mahasiswa = $this->M_web->Getmahasiswa_nim();
		$this->load->view('page_header');
		$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);
	}

	public function jurusan()
	{
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header');
		$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	}
}
