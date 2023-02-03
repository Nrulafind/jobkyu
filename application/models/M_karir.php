<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_karir extends CI_Model
{
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	function insert_tips_karir($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function update_tips_karir($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function delete_tips_karir($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
