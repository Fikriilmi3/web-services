<?php

class Modul extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_modul');
    }

    public function index()
    {
        // $isi['content'] = 'modul/v_modul';
        $isi['judul'] = 'Daftar Data modul';
        $isi['data'] = $this->m_modul->getAllDatamodul();
        // $this->load->view('v_dashboard', $isi);
    }

    // public function tambah_modul()
    // {
    //     // $isi['content'] = 'modul/t_modul';
    //     $isi['judul'] = 'Tambah Data modul';
    //     $isi['id'] = $this->m_modul->generate_id_modul();
    //     // $this->load->view('v_dashboard', $isi);
    // }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama_modul' => $this->input->post('nama_modul')
        );
        $query = $this->db->insert('tb_modul', $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Modul Berhasil Disimpan');
            redirect('modul','refresh');
        }
    }

    // public function edit($id)
    // {
    //     $isi['content'] = 'modul/e_modul';
    //     $isi['judul'] = 'Form Edit modul';
    //     $isi['modul'] = $this->m_modul->edit($id);
    //     $this->load->view('v_dashboard', $isi);
    // }

    // public function update()
    // {
    //     $id = $this->input->post('id');

    //     $data = array(
    //         'id' => $this->input->post('id'),
    //         'modul' => $this->input->post('modul')
    //     );
    //     $query = $this->m_modul->update($id, $data);
    //     if($query = true){
    //         $this->session->set_flashdata('info', 'Data modul Berhasil Diupdate');
    //         redirect('modul');
    //     }
    // }

    // public function delete($id)
    // {
    //     $query = $this->m_modul->delete($id);
    //     if($query = true){
    //         $this->session->set_flashdata('info', 'Data modul Berhasil Dihapus');
    //         redirect('modul');
    //     }
    // }
}
