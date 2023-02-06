<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApplyMitra extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->status) {
			redirect('');
		}
		$this->load->model('M_mitra');
	}

	//index function apply lowongan
	public function index()
	{
		$data["lowongan"] = $this->M_mitra->getAll();
		$this->load->view("", $data);
	}
	//function untuk menambahkan inputan mitra
	public function add_mitra()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$nama_perusahaan = $this->input->post('');
		$deskripsi_perusahaan = $this->input->post('');
		$alamat_perusahaan = $this->input->post('');
		$media = $_FILES['media'];

		if (empty($media['name'])) {
			$data = array(
				'nama_perusahaan' => $nama_perusahaan,
				'deskripsi_perusahaan' => $deskripsi_perusahaan,
				'alamat_perusahaan' => $alamat_perusahaan,
			);
			$this->M_mitra->insert_mitra('tbl_mitra', $data);
			$this->session->set_flashdata('Mitra', 'Mitra berhasil ditambahkan');
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
				$media = $this->upload->data('file_name');
				$data = array(
					'nama_perusahaan' => $nama_perusahaan,
					'deskripsi_perusahaan' => $deskripsi_perusahaan,
					'alamat_perusahaan' => $alamat_perusahaan,
					'media' => $media
				);

				$this->M_mitra->insert_mitra_file('tbl_mitra', $data);
				$this->session->set_flashdata('Mitra', 'Mitra berhasil ditambahkan');
				redirect('');
			}
		}
	}

	//function untuk menambahkan lowongan oleh mitra
	public function add_lowongan()
	{
		$deskripsi = $this->input->post('');
		$tgl_rilis = $this->input->post('');
		$tgl_selesai = $this->input->post('');
		$posisi = $this->input->post('');
		$media = $_FILES['media'];

		if (empty($media['name'])) {
			$data = array(
				'deskripsi' => $deskripsi,
				'tgl_rilis' => $tgl_rilis,
				'tgl_selesai' => $tgl_selesai,
				'posisi' => $posisi
			);
			$this->M_mitra->insert_lowongan('tbl_lowongan', $data);
			$this->session->set_flashdata('Lowongan', 'Lowongan berhasil ditambahkan');
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
				$media = $this->upload->data('file_name');
				$data = array(
					'deskripsi' => $deskripsi,
					'tgl_rilis' => $tgl_rilis,
					'tgl_selesai' => $tgl_selesai,
					'posisi' => $posisi,
					'media' => $media
				);

				$this->M_mitra->insert_lowongan_file('tbl_lowongan', $data);
				$this->session->set_flashdata('lowongan', 'lowongan berhasil ditambahkan');
				redirect('');
			}
		}
	}
	//function untuk edit inputan mitra
	public function edit_mitra($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$nama_perusahaan = $this->input->post('');
		$deskripsi_perusahaan = $this->input->post('');
		$alamat_perusahaan = $this->input->post('');
		$media = $_FILES['media'];

		$where = ['id_mitra' => $id];

		if (empty($media['name'])) {
			$data = array(
				'nama_perusahaan' => $nama_perusahaan,
				'deskripsi_perusahaan' => $deskripsi_perusahaan,
				'alamat_perusahaan' => $alamat_perusahaan,
			);
			$this->M_mitra->insert_mitra($where, 'tbl_mitra', $data);
			$this->session->set_flashdata('Mitra', 'Mitra berhasil diubah');
			redirect('');
		} else {
			$s = $this->db->query('select media from tbl_mitra where id_mitra=' . $id)->row();
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
				$media = $this->upload->data('file_name');
				$data = array(
					'nama_perusahaan' => $nama_perusahaan,
					'deskripsi_perusahaan' => $deskripsi_perusahaan,
					'alamat_perusahaan' => $alamat_perusahaan,
					'media' => $media
				);

				$this->M_mitra->insert_mitra_file($where, 'tbl_mitra', $data);
				$this->session->set_flashdata('Mitra', 'Mitra berhasil diubah');
				redirect('');
			}
		}
	}

	//function untuk edit lowongan oleh mitra
	public function edit_lowongan($id)
	{
		$deskripsi = $this->input->post('');
		$tgl_rilis = $this->input->post('');
		$tgl_selesai = $this->input->post('');
		$posisi = $this->input->post('');
		$media = $_FILES['media'];

		$where = ['id_lowongan' => $id];

		if (empty($media['name'])) {
			$data = array(
				'deskripsi' => $deskripsi,
				'tgl_rilis' => $tgl_rilis,
				'tgl_selesai' => $tgl_selesai,
				'posisi' => $posisi,
			);
			$this->M_mitra->insert_lowongan($where, 'tbl_lowongan', $data);
			$this->session->set_flashdata('Lowongan', 'Lowongan berhasil diubah');
			redirect('');
		} else {
			$s = $this->db->query('select media from tbl_lowongan where id_mitra=' . $id)->row();
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
				$media = $this->upload->data('file_name');
				$data = array(
					'deskripsi' => $deskripsi,
					'tgl_rilis' => $tgl_rilis,
					'tgl_selesai' => $tgl_selesai,
					'posisi' => $posisi,
					'media' => $media
				);

				$this->M_mitra->insert_lowongan_file($where, 'tbl_lowongan', $data);
				$this->session->set_flashdata('Lowongan', 'Lowongan berhasil ditambahkan');
				redirect('');
			}
		}
	}

	//function untuk melakukan hapus lowongan oelh mitra
	public function delete_mitra($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_mitra->delete_mitra($where, 'tbl_mitra');
		redirect('');
	}

	//function untuk melakukan hapus lowongan oelh mitra
	public function delete_lowongan($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$where = array('' => $id);
		$this->M_mitra->delete_lowongan($where, 'tbl_lowongan');
		redirect('');
	}
}
