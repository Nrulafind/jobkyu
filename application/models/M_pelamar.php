<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pelamar extends CI_Model
{
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	function insert_lamaran($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function update_lamaran($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function delete_lamaran($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
