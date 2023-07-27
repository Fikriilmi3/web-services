<?php

class User Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $isi['content'] = 'user/v_user';
        $isi['judul'] = 'Daftar Data User';
        $isi['data'] = $this->m_user->getAllDataUser();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_user()
    {
        $isi['content'] = 'user/t_user';
        $isi['judul'] = 'Daftar Data User';
        $isi['id']= $this->m_user->generate_id_user();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'nama_anak' => $this->input->post('nama_anak'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'telepone' => $this->input->post('telepone'),
            'password' => md5($this->input->post('password')),

        );
        $query = $this->db->insert('user', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data User Berhasil Disimpan');
            redirect('user','refresh');
        }
    }
    
    public function edit($id)
    {
        $isi['content'] = 'user/e_user';
        $isi['judul'] = 'Form Edit User';
        $isi['user'] = $this->m_user->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $this->input->post('id'),
            'username' => $this->input->post('username'),
            'nama_anak' => $this->input->post('nama_anak'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'telepone' => $this->input->post('telepone'),
            'password' => md5($this->input->post('password')),

        );
        $query = $this->m_user->update($id, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data User Berhasil Diupdate');
            redirect('user');
        }
    }

    public function delete($id)
    {
        $query = $this->m_user->delete($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data User Berhasil Didelete');
            redirect('user');
        }
    }
}