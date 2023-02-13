<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPanel extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->status) {
			redirect('');
		}
		$this->load->model('M_admin');
	}

	// View Controll

	public function dashboard()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('template/admin/footer');
	}
	public function partners()
	{
		$this->load->view('template/admin/header');
		$this->load->view('admin/partners');
		$this->load->view('template/admin/footer');
	}


	//list retrieving data
	if ($this->session->status != '') {
		redirect('');
	}
	$data['siswa'] = $this->m_admin->list_lowongan()->result();
	$data['listkelas'] = $this->m_admin->list_pelamar()->result();

	$this->load->view('');
	$this->load->view('');
}
