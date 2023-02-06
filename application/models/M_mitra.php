<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mitra extends CI_Model
{
	public function getAll()
	{
		$id = $this->session->userdata('email');
		$this->db->join('user', 'user.id_user = event.id_user');
		$this->db->where('email', $id);
		return $this->db->get($this->_table)->result();
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
