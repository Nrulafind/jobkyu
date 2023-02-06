<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mitra extends CI_Model
{
	public function getAll()
	{
		$id = $this->session->userdata('email');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_lowongan.id_user');
		$this->db->where('email', $id);
	}

	function insert_lowongan($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function update_lowongan($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function delete_lowongan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
