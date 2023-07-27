<?php

class Dashboard extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $isi['content'] = 'v_content';
        $isi['total_user'] = $this->m_dashboard->total_user();
        $isi['total_soal'] = $this->m_dashboard->total_soal();
        $isi['total_hasil'] = $this->m_dashboard->total_hasil();
        $this->load->view('v_dashboard', $isi);
    }
}