<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MitraPanel extends CI_Controller
{
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
