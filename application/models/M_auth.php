<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function cek_login($u, $p)
	{
		return $this->db->get_where('tbl_admin', ['userName' => $u, 'password' => $p])->row_array();
	}

	public function cek_login_member($u, $p)
	{
		return $this->db->get_where('tbl_member', ['username' => $u, 'password' => $p])->row_array();
	}
}
