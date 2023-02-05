<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//load model auth login dan register semua role
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
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

		$cek = $this->M_auth->cek_login($u, $p);
		$cek_role = $this->M_auth->cek_role($u, $p);

		if ($cek) {
			if ($cek_role['id_role'] == 1) {
				$data_session = [
					'username' => $cek['username'],
					'password' => $cek['password'],
					'status' => 'login'
				];

				$this->session->set_userdata($data_session);
				redirect('beranda');
			}
			if ($cek_role['id_role'] == 2) {
				$data_session = [
					'username' => $cek['username'],
					'password' => $cek['password'],
					'status' => 'login'
				];

				$this->session->set_userdata($data_session);
				redirect('');
			}
			if ($cek_role['id_role'] == 3) {
				$data_session = [
					'username' => $cek['username'],
					'password' => $cek['password'],
					'status' => 'login'
				];

				$this->session->set_userdata($data_session);
				redirect('');
			}
		} else {
			redirect('');
		}
	}

	// Register
	public function register()
	{
		$this->load->view('auth/register');
	}
	//function aksi untuk register data mitra ke database
	public function aksi_daftar_mitra()
	{
		$username = $this->input->post('username');
		$mitra = $this->M_auth->cek_user($username);

		if ($mitra) {
			$this->session->set_flashdata('error', '<b>Username</b> ini sudah terdaftar!');
			redirect('');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'namaKonsumen' => $this->input->post('namaKonsumen'),
				'alamat' => $this->input->post('alamat'),
				'idKota' => $this->input->post('idKota'),
				'email' => $this->input->post('email'),
				'tlpn' => $this->input->post('tlpn'),
				'id_role' => 1
			];

			$this->M_auth->insert_mitra('tbl_user', $data);
			$this->session->set_flashdata('success', '<b>Berhasil</b>. Akun Anda telah terdaftar');
			redirect('');
		}
	}
	//function aksi untuk register data user ke database
	public function aksi_daftar_user()
	{
		$username = $this->input->post('username');
		$user = $this->M_auth->cek_user($username);

		if ($user) {
			$this->session->set_flashdata('error', '<b>Username</b> ini sudah terdaftar!');
			redirect('');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'namaKonsumen' => $this->input->post('namaKonsumen'),
				'alamat' => $this->input->post('alamat'),
				'idKota' => $this->input->post('idKota'),
				'email' => $this->input->post('email'),
				'tlpn' => $this->input->post('tlpn'),
				'id_role' => 2
			];

			$this->M_auth->insert_user('tbl_user', $data);
			$this->session->set_flashdata('success', '<b>Berhasil</b>. Akun Anda telah terdaftar');
			redirect('');
		}
	}
	//untuk melakukan destroy session
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
