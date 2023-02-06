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
		$data["tips_karir"] = $this->M_karir->getAll();
		$this->load->view("", $data);
	}
	//function untuk menambahkan tips_karir oleh tips_karir
	public function add_tips_karir()
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$judul = $this->input->post('');
		$materi = $this->input->post('');
		$tgl_rilis = $this->input->post('');
		$media = $_FILES['media'];

		if (empty($media['name'])) {
			$data = array(
				'judul' => $judul,
				'materi' => $materi,
				'tgl_rilis' => $tgl_rilis,
			);
			$this->M_karir->insert_tips_karir('tbl_tips_karir', $data);
			$this->session->set_flashdata('tips_karir', 'tips_karir berhasil ditambahkan');
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
					'judul' => $judul,
					'materi' => $materi,
					'tgl_rilis' => $tgl_rilis,
					'media' => $media
				);

				$this->M_karir->insert_tips_karir_file('tbl_tips_karir', $data);
				$this->session->set_flashdata('tips_karir', 'tips_karir berhasil ditambahkan');
				redirect('');
			}
		}
	}
	//function untuk melakukan edit tips_karir oleh tips_karir
	public function edit_tips_karir($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$judul = $this->input->post('');
		$materi = $this->input->post('');
		$tgl_rilis = $this->input->post('');
		$media = $_FILES['media'];

		$where = ['id_tips_karir' => $id];

		if (empty($media['name'])) {
			$data = array(
				'judul' => $judul,
				'materi' => $materi,
				'tgl_rilis' => $tgl_rilis,
			);
			$this->M_karir->insert_tips_karir($where, 'tbl_tips_karir', $data);
			$this->session->set_flashdata('tips_karir', 'tips_karir berhasil diubah');
			redirect('');
		} else {
			$s = $this->db->query('select media from tbl_tips_karir where id_tips_karir=' . $id)->row();
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
					'judul' => $judul,
					'materi' => $materi,
					'tgl_rilis' => $tgl_rilis,
					'media' => $media
				);

				$this->M_karir->insert_tips_karir_file($where, 'tbl_tips_karir', $data);
				$this->session->set_flashdata('tips_karir', 'tips_karir berhasil diubah');
				redirect('');
			}
		}
	}
	//function untuk melakukan hapus tips_karir oelh tips_karir
	public function delete_tips_karir($id)
	{
		if ($this->session->status != '') {
			redirect('');
		}
		$where = array('tbl_tips_karir' => $id);
		$this->M_karir->delete_tips_karir($where, 'tbl_tips_karir');
		redirect('');
	}
}
