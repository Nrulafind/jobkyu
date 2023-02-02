<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//load model auth login dan register semua role
	function __construct()
	{
		parent::__construct();
		// $this->load->model('M_auth');
	}

	//login 
	public function login()
	{
		$this->load->view('auth/login');
	}

	public function aksi_login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->Mlogin->cek_login($u, $p);

		if ($cek) {
			$data_session = [
				'idAdmin' => $cek['idAdmin'],
				'userName' => $cek['userName'],
				'status' => 'login'
			];

			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			redirect('adminpanel');
		}
	}

	// Register
	public function register()
	{
		$this->load->view('auth/register');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('adminpanel');
	}
}
