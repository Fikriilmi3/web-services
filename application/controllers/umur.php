<?php

class Umur extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_umur');
    }

    public function index()
    {
        $isi['content'] = 'umur/v_umur';
        $isi['judul'] = 'Daftar Data Umur';
        $isi['data'] = $this->m_umur->getAllDataUmur();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_umur()
    {
        $isi['content'] = 'umur/t_umur';
        $isi['judul'] = 'Tambah Data Umur';
        $isi['id'] = $this->m_umur->generate_id_umur();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'umur' => $this->input->post('umur')
        );
        $query = $this->db->insert('tb_umur', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Umur Berhasil Disimpan');
            redirect('umur','refresh');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'umur/e_umur';
        $isi['judul'] = 'Form Edit Umur';
        $isi['umur'] = $this->m_umur->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $this->input->post('id'),
            'umur' => $this->input->post('umur')
        );
        $query = $this->m_umur->update($id, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Umur Berhasil Diupdate');
            redirect('umur');
        }
    }

    public function delete($id)
    {
        $query = $this->m_umur->delete($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Umur Berhasil Dihapus');
            redirect('umur');
        }
    }
}
