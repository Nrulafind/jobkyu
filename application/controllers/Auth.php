<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	//load model auth login dan register semua role
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_auth');
	}

	//login 
	public function login()
	{
		$data['title'] = 'Login - Jobkyu';
		$this->load->view('auth/login', $data);
	}

	public function aksi_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = $this->M_auth->cek_login($email);
		if ($user) {
			if (password_verify($password, $user['password'])) 
			{
				$data_session = [
					'email' => $user['email'],
					'password' => $user['password'],
					'status' => 'active'
				];
				$this->session->set_userdata($data_session);
				if ($user['id_role'] == 1 )
				{
					echo'login berhasil kamu adalah user';
				}
				else if ($user['id_role'] == 3 )
				{
					echo'login berhasil kamu adalah mitra';
				}
				else
				{
					echo'login berhasil kamu adalah Admin';
				}
			}
			else 
			{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('Auth/Login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
			redirect('Auth/login');
		}
	}

	// Register
	public function register()
	{
		$data['title'] = 'Register - Jobkyu';
		$this->load->view('auth/register', $data);
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
				'id_role' => 3
			];

			$this->M_auth->insert_mitra('tbl_user', $data);
			$this->session->set_flashdata('success', '<b>Berhasil</b>. Akun Anda telah terdaftar');
			redirect('');
		}
	}

	//function aksi untuk register data user ke database
	public function aksi_daftar_user()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');

		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->M_auth->cek_user($username, $email);

		if ($user) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email / Username Already Used.</div>');
			redirect('Auth/Register');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => password_hash ($this->input->post('password'), PASSWORD_DEFAULT),
				'id_role' => 1
			];

			$this->M_auth->insert_user('tbl_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully registered an account.</div>');
			redirect('Auth/login');
		}
	}
	//untuk melakukan destroy session
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
