<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karir extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_karir');
	}
	//index function apply tips_karir
	public function index()
	{
		$data["tips_karir"] = $this->M_mitra->getAll();
		$this->load->view("", $data);
	}
	//function untuk menambahkan tips_karir oleh mitra
	public function add_tips_karir()
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
		$this->M_mitra->insert_tips_karir('tbl_tips_karir', $data);
		redirect('');
	}
	//function untuk melakukan edit tips_karir oleh mitra
	public function edit_tips_karir($id)
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
		$this->M_mitra->update_tips_karir($where, '', $data);
		redirect('');
	}
	//function untuk melakukan hapus tips_karir oelh mitra
	public function delete($id)
	{
		if ($this->session->status != 'admin') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_mitra->delete_tips_karir($where, '');
		redirect('');
	}
}
