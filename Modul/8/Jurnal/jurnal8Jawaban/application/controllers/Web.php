<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_web');
  	}

  	public $data = array(
  		"nim" => "Nim Kalian",
  		"nama" => "Isi Nama Kalian",
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
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header',['dataJ'=>$data_jurusan]);
		$this->load->view('page_mahasiswa',['data'=>$data_mahasiswa]);
	}

	public function jurusan()
	{
		$data_jurusan = $this->M_web->Getjurusan_nim();
		$this->load->view('page_header');
		$this->load->view('page_jurusan',['data'=>$data_jurusan]);
	}


	#lengkapi FUNCTION BERIKUT
	public function hapusmahasiswa($nim)
	{
		$this->M_web->hapus_mahasiswa($nim);
		redirect('index.php/web/mahasiswa');	
	}


	public function tambahmahasiswa()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'kelas' => $kelas,
			'id_jurusan' => $jurusan,
		);
		$this->M_web->tambah_mahasiswa($data);

		redirect('index.php/web/mahasiswa');	

	}

	public function editmahasiswa()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$data = array(
			'nama' => $nama,
			'kelas' => $kelas,
			'id_jurusan' => $jurusan,
		);
		$this->M_web->edit_mahasiswa($nim,$data);

		redirect('index.php/web/mahasiswa');	
	}


}
