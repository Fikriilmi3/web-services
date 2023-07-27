<?php

class Kategori_soal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori_soal');
    }

    public function index()
    {
        $isi['content'] = 'kategori_soal/v_kategori_soal';
        $isi['data'] = $this->db->get('tb_kategori_soal')->result();
        $isi['data'] = $this->m_kategori_soal->get_data_kategori_soal();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_kategori_soal()
    {
        $isi['content'] = 'kategori_soal/t_kategori_soal';
        $isi['id'] = $this->m_kategori_soal->id();
        $isi['modul'] = $this->db->get('tb_modul')->result();
        // $isi['modul'] = $this->m_kategori_soal->getModulNames();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'id_modul' => $this->input->post('id_modul'),
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $query = $this->db->insert('tb_kategori_soal', $data);
        if($query == true){
            $this->session->set_flashdata('info', 'Data Kategori Soal Berhasil Disimpan');
            redirect('kategori_soal');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'kategori_soal/e_kategori_soal';
        // $isi['tb_modul'] = $this->db->getModulNames('tb_modul');
        $isi['modul'] = $this->db->get('tb_modul')->result();
        $isi['data'] = $this->m_kategori_soal->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');

        $data = array(
            'id' => $this->input->post('id'),
            'id_modul' => $this->input->post('id_modul'),
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $query = $this->m_kategori_soal->update($id, $data);
        if($query == true){
            $this->session->set_flashdata('info', 'Data Kategori Soal Berhasil Diupdate');
            redirect('kategori_soal');
        }
    }

    public function delete($id)
    {
        $_id = $this->db->get_where('tb_kategori_soal',['id'=>$id])->row();
        $query = $this->db->delete('tb_kategori_soal',['id'=>$id]);
        if($query == true){
            $this->session->set_flashdata('info', 'Data Kategori Soal Berhasil Didelete');
            redirect('kategori_soal', 'refresh');
        }
    }
}

