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
        $isi['total_buku'] = $this->m_dashboard->total_buku();
        $isi['total_penyunting'] = $this->m_dashboard->total_penyunting();
        $isi['total_penerbit'] = $this->m_dashboard->total_penerbit();
        $isi['total_feedback'] = $this->m_dashboard->total_feedback();
        $this->load->view('v_dashboard', $isi);
    }
}