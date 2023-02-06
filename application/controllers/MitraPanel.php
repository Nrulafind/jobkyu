<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MitraPanel extends CI_Controller
{
    public function dashboard()
    {
        $this->load->view('mitra/dashboard');
    }

    public function general()
    {
        $data['title'] = 'Mitra - General Information';
        $this->load->view('mitra/generalInformation', $data);
    }
}
