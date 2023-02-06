<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pelamar extends CI_Model
{
	public function getAll()
	{
		$id = $this->session->userdata('email');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_melamar.id_user');
		$this->db->where('email', $id);
	}

	//function Pelamar
	//function untuk insert data Pelamar
	function insert_data_pelamar($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function insert_data_pelamar_file($table, $data)
	{
		$this->db->insert($table, $data);
	}
	//function untuk update data Pelamar
	function edit_data_pelamar($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function edit_data_Pelamar_file($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	//function untuk delete inputan Pelamar
	//function untuk delete lowongan
	function delete_data_pelamar($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
