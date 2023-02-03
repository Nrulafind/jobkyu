<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPanel extends CI_Controller
{

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
}
