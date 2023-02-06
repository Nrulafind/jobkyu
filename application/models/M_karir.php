<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_karir extends CI_Model
{
	public function getAll()
	{
		$id = $this->session->userdata('email');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_tips_karir.id_user');
		$this->db->where('email', $id);
	}

	//function tips_karir
	//function untuk insert data tips_karir
	function insert_tips_karir($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function insert_tips_karir_file($table, $data)
	{
		$this->db->insert($table, $data);
	}
	//function untuk update data tips_karir
	function edit_tips_karir($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function edit_tips_karir_file($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	//function untuk delete inputan tips_karir
	//function untuk delete tips_karir
	function delete_tips_karir($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
