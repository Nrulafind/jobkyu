<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MitraPanel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->status) {
			redirect('');
		}
		$this->load->model('M_mitra');
	}

	//list retrieving data
	if ($this->session->status != '') {
		redirect('');
	}
	$data['title'] = 'Siswa';
	$data['siswa'] = $this->m_admin->list_siswa()->result();
	$data['listkelas'] = $this->m_admin->list_kelas()->result();

	$this->header($data);
	$this->load->view('');
	$this->load->view('');
}
