<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApplyUser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_mitra');
	}
	//index function apply lamaran
	public function index()
	{
		$data["lamaran"] = $this->M_mitra->getAll();
		$this->load->view("", $data);
	}
	//function untuk menambahkan lamaran oleh mitra
	public function add_lamaran()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->M_mitra->insert_lamaran('tbl_lamaran', $data);
		redirect('');
	}
	//function untuk melakukan edit lamaran oleh mitra
	public function edit_lamaran($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('' => $id);
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->M_mitra->update_lamaran($where, '', $data);
		redirect('');
	}
	//function untuk melakukan hapus lamaran oelh mitra
	public function delete_lamaran($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_mitra->delete_lamaran($where, 'guru');
		redirect('');
	}
}
