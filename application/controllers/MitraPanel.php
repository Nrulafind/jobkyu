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

    public function dashboard()
    {
        $data['title'] = 'Mitra - Dashboard';
        $this->load->view('mitra/dashboard', $data);
    }

    public function vacancies()
    {
        $data['title'] = 'Mitra - Job Vacancies';
        $this->load->view('mitra/vacancies', $data);
    }

    public function general()
    {
        $data['title'] = 'Mitra - General Information';
        $this->load->view('mitra/generalInformation', $data);
    }
}
