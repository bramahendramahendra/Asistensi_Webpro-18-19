<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awalan extends CI_Controller {

	 function __construct(){
	 	parent::__construct();
	 	$this->load->model('M_Awalan');
	}


	public function index()
	{
		$data_mhs = $this->M_Awalan->Getdata();
		$data_teman = $this->M_Awalan->Getteman();
		$this->load->view('V_Awalan',['data'=>$data_mhs]);
		

	}

	public function table()
	{	
		$data_mhs = $this->M_Awalan->Getdata();
		$data_teman = $this->M_Awalan->Getteman();
		$this->load->view('V_Table',['data2'=>$data_teman,'data'=>$data_mhs]);

	}



}
