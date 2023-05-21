<?php

class Login extends CI_Controller{


    public function index()
    {
        $this->load->view('v_login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('v_login');
    }

    public function registrasi()
    {
        $isi['content'] = 'v_registrasi';
        $isi['judul'] = 'Registrasi Akun';
        $this->load->view('v_dashboard', $isi);
    }
}