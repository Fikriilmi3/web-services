<?php

class Soal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
    }

    public function index()
    {
        $this->load->view('v_soal');
    }
    
}