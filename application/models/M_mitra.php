<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mitra extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	function list_lowongan()
	{
		$this->db->select('ujian.*, kelas.id_kelas, kelas.kode_kelas, mapel.*, guru.id_guru, guru.nama');
		$this->db->from('ujian');
		$this->db->join('kelas', 'ujian.id_kelas=kelas.id_kelas');
		$this->db->join('mapel', 'ujian.id_mapel=mapel.id_mapel');
		$this->db->join('guru', 'ujian.id_guru=guru.id_guru');
		return $this->db->get();
	}
	function list_pelamar()
	{
		$this->db->select('ujian.*, kelas.id_kelas, kelas.kode_kelas, mapel.*, guru.id_guru, guru.nama');
		$this->db->from('ujian');
		$this->db->join('kelas', 'ujian.id_kelas=kelas.id_kelas');
		$this->db->join('mapel', 'ujian.id_mapel=mapel.id_mapel');
		$this->db->join('guru', 'ujian.id_guru=guru.id_guru');
		return $this->db->get();
	public function getAll()
	{
		$id = $this->session->userdata('email');
		$this->db->join('tbl_user', 'tbl_user.id_user = tbl_lowongan.id_user');
		$this->db->where('email', $id);
	}
	//function mitra
	//function untuk insert data mitra
	function insert_mitra($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function insert_mitra_file($table, $data)
	{
		$this->db->insert($table, $data);
	}
	//function untuk update data mitra
	function edit_mitra($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function edit_mitra_file($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	//function untuk delete inputan mitra
	//function untuk delete lowongan
	function delete_mitra($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	//function lowongan
	//function insert lowongan menggunakan media ataupun tidak
	function insert_lowongan($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function insert_lowongan_file($table, $data)
	{
		$this->db->insert($table, $data);
	}
	//function untuk update lowongan menggunakan media ataupun tidak
	function edit_lowongan($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function edit_lowongan_file($where, $table, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	//function untuk delete lowongan
	function delete_lowongan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
