<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_M extends CI_Model {

	public function Login($email, $password)
	{
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('email' => $email, 'password' => $password));
        $query = $this->db->get();
        return $query->first_row();
    }
    
    public function Cek_Register($email)
	{
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        return $query->first_row();
    }
    
    public function Register($data)
	{
        $this->db->insert('users', $data);
        $id = $this->db->insert_id();
    }
}
