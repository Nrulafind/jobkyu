<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	//cek login function
	public function cek_login($u, $p)
	{
		return $this->db->get_where('tbl_user', ['userName' => $u, 'password' => $p])->row_array();
	}

	//cek role user yang akan login
	public function cek_role($u, $p)
	{
		$this->db->get_where('tbl_user',  ['userName' => $u, 'password' => $p, 'id_role'])->row_array();
	}

	//cek user untuk register
	public function cek_user($username)
	{
		return $this->db->get_where('tbl_member', ['username' => $username])->row_array();
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

