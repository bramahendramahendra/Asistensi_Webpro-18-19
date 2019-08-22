<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends CI_Model {

	public function GetMahasiswa_nim(){
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('jurusan','jurusan.id_jurusan=mahasiswa.id_jurusan');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getjurusan_nim(){
		$this->db->select('nama_jurusan, fakultas, akreditasi, count(*) jumlah_mahasiswa');
		$this->db->from('jurusan');
		$this->db->join('mahasiswa','mahasiswa.id_jurusan=jurusan.id_jurusan');
		$this->db->group_by('mahasiswa.id_jurusan');
		$query = $this->db->get();
		return $query->result();
	}
	
}
