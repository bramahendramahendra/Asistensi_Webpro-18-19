<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_M extends CI_Model {

	public function Get_Data_User($id)
	{
        $this->db->select('first_name,last_name');
        $this->db->from('users');
        $this->db->where('id_users', $id);
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
