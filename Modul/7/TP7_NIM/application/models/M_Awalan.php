<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Awalan extends CI_Model {
	

	public function Getdata()
	{
		$query = $this->db->get('tb_datadiri');
		return $query->row();
	}

		public function Getteman()
	{
		$query = $this->db->get('tb_datateman');
		return $query->result();
	}
	
	
}