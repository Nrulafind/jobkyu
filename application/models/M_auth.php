<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	//cek login function
	public function cek_login($email)
	{
		return $this->db->get_where('tbl_user', ['email' => $email])->row_array();
	}

	//cek user untuk register
	public function cek_user($username, $email)
	{
		return $this->db->get_where('tbl_user', ['username' => $username, 'email' => $email])->row_array();
	}

	//cek mitra untuk register agar tidak ada data yang sama
	public function cek_mitra($username)
	{
		return $this->db->get_where('tbl_member', ['username' => $username])->row_array();
	}

	//function untuk melakukan insert data register mitra
	public function insert_mitra($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}
	
	//function untuk melakukan insert data register user
	public function insert_user($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}
}

