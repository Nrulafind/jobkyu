<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApplyMitra extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_mitra');
	}
	//index function apply lowongan
	public function index()
	{
		$data["lowongan"] = $this->M_mitra->getAll();
		$this->load->view("", $data);
	}
	//function untuk menambahkan lowongan oleh mitra
	public function add_lowongan()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$ = $this->input->post('');
		$ = $this->input->post('');
		$ = $this->input->post('');
		$ = $this->input->post('');
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->M_mitra->insert_lowongan('tbl_lowongan', $data);
		redirect('');
	}
	//function untuk melakukan edit lowongan oleh mitra
	public function edit_lowongan($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$ = $this->input->post('');
		$ = $this->input->post('');
		$ = $this->input->post('');
		$ = $this->input->post('');
		$where = array('' => $id);
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'username' => $username,
			'password' => $password
		);
		$this->M_mitra->update_lowongan($where, '', $data);
		redirect('');
	}
	//function untuk melakukan hapus lowongan oelh mitra
	public function delete($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_mitra->delete_lowongan($where, 'guru');
		redirect('');
	}
}
