<?php

class Hasil Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_hasil');
    }

    public function index()
    {
        $isi['content'] = 'hasil/v_hasil';
        $isi['data'] = $this->db->get('tb_hasil')->result();
        $isi['data'] = $this->m_hasil->get_data_hasil();
        // $isi['judul'] = 'Daftar Data hasil';
        // $isi['data'] = $this->m_hasil->getAllDatahasil();
        $this->load->view('v_dashboard', $isi);
    }

    // public function tambah_hasil()
    // {
    //     // $this->load->view('hasil/t_hasil');
    //     $isi['content'] = 'hasil/t_hasil';
    //     $isi['id'] = $this->m_hasil->id();
    //     $isi['user'] = $this->db->get('user')->result();
    //     $isi['kategori_soal'] = $this->db->get('tb_kategori_soal')->result();
    //     $isi['kategori_umur'] = $this->db->get('tb_umur')->result();
    //     $this->load->view('v_dashboard', $isi);
    // }

    public function simpan()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'id_user' => $this->input->post('id_user'),
            // 'id_user' => $this->input->post('id_user'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_umur' => $this->input->post('id_umur'),
            'jumlah_ya' => $this->input->post('jumlah_ya'),
            'jumlah_tidak' => $this->input->post('jumlah_tidak'),
            'hasil' => $this->input->post('hasil'),
            'saran' => $this->input->post('saran'),
            'tgl_tes' => $this->input->post('tgl_tes')

        );
        $query = $this->db->insert('tb_hasil', $data);
            // redirect('hasil','refresh');
            if ($query = true) {
                $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
                redirect('hasil');
            }
    }

    public function delete($id)
    {
        $query = $this->m_hasil->delete($id);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Hasil Berhasil Dihapus');
            redirect('hasil');
    //     // }
        // $_id = $this->db->get_where('tb_hasil',['id'=>$id])->row();
        // $query = $this->db->delete('tb_hasil',['id'=>$id]);
        // if ($query = true) {
        //     // unlink('assets/buku/gambar'.$_id->gambar);
        //     $this->session->set_flashdata('info', 'Data Berhasil Dihapus!');
        //     redirect('hasil', 'refresh');
        }
    }

    // public function delete($id)
    // {
    //     $query = $this->m_hasil->delete($id);
    //     if($query = true){
    //         $this->session->set_flashdata('info', 'Data Hasil Berhasil Didelete');
    //         redirect('hasil');
    //     }
    // }
}