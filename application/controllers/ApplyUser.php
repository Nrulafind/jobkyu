<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApplyUser extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->status) {
			redirect('');
		}
		$this->load->model('M_pelamar');
	}

	//index function apply melamar
	public function index()
	{
		$data["melamar"] = $this->M_pelamar->getAll();
		$this->load->view("", $data);
	}
	//function untuk melamar 
	public function add_melamar()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		//i'm actually confuseeeee

	}
	//function untuk melamar 
	public function edit_melamar($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		//i'm actually confuseeeee

	}
	//function untuk melamar 
	public function delete_melamar($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_pelamar->delete_pelamar($where, 'tbl_melamar');
		redirect('');
		//i'm actually confuseeeee
	}

	//function untuk data melamar 
	public function add_data_pelamar()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$nama = $this->input->post('');
		$umur = $this->input->post('');
		$pendidikan = $this->input->post('');
		$jenis_kelamim = $this->input->post('');
		$alamat = $this->input->post('');
		$tgl_lahir = $this->input->post('');
		$tempat_lahir = $this->input->post('');
		$cv = $_FILES['media'];

		if (empty($cv['name'])) {
			$data = array(
				'nama' => $nama,
				'umur' => $umur,
				'pendidikan' => $pendidikan,
				'jenis_kelamin' => $jenis_kelamim,
				'alamat' => $alamat,
				'tgl_lahir' => $tgl_lahir,
				'tempat_lahir' => $tempat_lahir,
			);
			$this->M_pelamar->insert_data_pelamar('tbl_data_pelamar', $data);
			$this->session->set_flashdata('Data Pelamar', 'Data Pelamar berhasil ditambahkan');
			redirect('');
		} else {
			$config['upload_path'] = './../media';
			$config['allowed_types'] = 'jpg|png|pdf';
			//load library upload
			$this->load->library('upload', $config);
			//proses upload file
			if (!$this->upload->do_upload('media')) {
				$data['error'] = $this->upload->display_errors();
				redirect('', $data);
			} else {
				$cv = $this->upload->data('file_name');
				$data = array(
					'nama' => $nama,
					'umur' => $umur,
					'pendidikan' => $pendidikan,
					'jenis_kelamin' => $jenis_kelamim,
					'alamat' => $alamat,
					'tgl_lahir' => $tgl_lahir,
					'tempat_lahir' => $tempat_lahir,
					'cv' => $cv
				);

				$this->M_pelamar->insert_data_pelamar_file('tbl_data_pelamar', $data);
				$this->session->set_flashdata('Data Pelamar', 'Data pelamar berhasil ditambahkan');
				redirect('');
			}
		}
	}
	//function untuk melakukan edit melamar oleh Pelamar
	public function edit_data_pelamar($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$nama = $this->input->post('');
		$umur = $this->input->post('');
		$pendidikan = $this->input->post('');
		$jenis_kelamim = $this->input->post('');
		$alamat = $this->input->post('');
		$tgl_lahir = $this->input->post('');
		$tempat_lahir = $this->input->post('');
		$cv = $_FILES['media'];

		$where = ['id_data_pelamar' => $id];

		if (empty($cv['name'])) {
			$data = array(
				'nama' => $nama,
				'umur' => $umur,
				'pendidikan' => $pendidikan,
				'jenis_kelamin' => $jenis_kelamim,
				'alamat' => $alamat,
				'tgl_lahir' => $tgl_lahir,
				'tempat_lahir' => $tempat_lahir,
			);
			$this->M_Pelamar->edit_data_pelamar($where, 'tbl_data_pelamar', $data);
			$this->session->set_flashdata('Pelamar', 'Pelamar berhasil diubah');
			redirect('');
		} else {
			$s = $this->db->query('select media from tbl_data_pelamar where id_data_pelamar=' . $id)->row();
			unlink('./../media/' . $s->media);
			$config['upload_path'] = './../media';
			$config['allowed_types'] = 'jpg|png|pdf';
			//load library upload
			$this->load->library('upload', $config);
			//proses upload file
			if (!$this->upload->do_upload('media')) {
				$data['error'] = $this->upload->display_errors();
				redirect('', $data);
			} else {
				$cv = $this->upload->data('file_name');
				$data = array(
					'nama' => $nama,
					'umur' => $umur,
					'pendidikan' => $pendidikan,
					'jenis_kelamin' => $jenis_kelamim,
					'alamat' => $alamat,
					'tgl_lahir' => $tgl_lahir,
					'tempat_lahir' => $tempat_lahir,
					'cv' => $cv
				);

				$this->M_Pelamar->edit_data_pelamar_file($where, 'tbl_data_pelamar', $data);
				$this->session->set_flashdata('Pelamar', 'Pelamar berhasil diubah');
				redirect('');
			}
		}
	}
	//function untuk melakukan hapus melamar 
	public function delete_data_pelamar($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_pelamar->delete_pelamar($where, 'tbl_data_pelamar');
		redirect('');
	}
}
