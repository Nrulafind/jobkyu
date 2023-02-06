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
	}
}
