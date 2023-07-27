<?php

class Soal extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
    }

    public function index()
    {
        $isi['content'] = 'soal/v_soal';
        $isi['data'] = $this->db->get('tb_soal')->result();
        $isi['data'] = $this->m_soal->get_data_soal();
        $this->load->view('v_dashboard', $isi);
    }

    public function tambah_soal()
    {
        $isi['content'] = 'soal/t_soal';
        $isi['id'] = $this->m_soal->id();
        $isi['kategori_soal'] = $this->db->get('tb_kategori_soal')->result();
        $isi['kategori_umur'] = $this->db->get('tb_umur')->result();
        $this->load->view('v_dashboard', $isi);
    }

    public function simpan()
    {
        $config['upload_path']		= 'assets/buku/gambar';
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']			= '2048';
		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar');
		$file_name = $this->upload->data();
        $data = array(
            'id' => $this->input->post('id'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_umur' => $this->input->post('id_umur'),
            'no_pertanyaan' => $this->input->post('no_pertanyaan'),
            'pertanyaan' => $this->input->post('pertanyaan'),
            'gambar'            => $file_name['file_name'],
            // tambahkan data lain sesuai dengan struktur tabel tb_soal
        );

        $query = $this->db->insert('tb_soal', $data);
        if ($query) {
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('soal');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'soal/e_soal';
        $isi['kategori_soal'] = $this->db->get('tb_kategori_soal')->result();
        $isi['kategori_umur'] = $this->db->get('tb_umur')->result();
        $isi['data'] = $this->m_soal->edit($id);
        $this->load->view('v_dashboard', $isi);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $config['upload_path'] = 'assets/buku/gambar';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!empty($_FILES['gambar']['name'])) {
            $this->upload->do_upload('gambar');
            $upload = $this->upload->data();
            $gambar = $upload['file_name'];
            $data = array(
                'id'         => $this-> input->post('id'),
                'id_kategori'      => $this-> input->post('id_kategori'),
                'id_umur'            => $this-> input->post('id_umur'),
                'no_pertanyaan'            => $this-> input->post('no_pertanyaan'),
                'pertanyaan'    => $this-> input->post('pertanyaan'),
                'gambar'            => $gambar,
                
            );
            $_id = $this->db->get_where('tb_soal', ['id' => $id])->row();
            $query = $this->m_soal->update($id, $data);
            if ($query = true) {
                $this->session->set_flashdata('info', 'Data Berhasil di Update');
                unlink('assets/gambar/buku/'.$_id->gambar);
                redirect('soal', 'refresh');
            }
        }else{
            $data = array(
                'id' => $this->input->post('id'),
                'id_kategori' => $this->input->post('id_kategori'),
                'id_umur' => $this->input->post('id_umur'),
                'no_pertanyaan' => $this->input->post('no_pertanyaan'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                // tambahkan data lain sesuai dengan struktur tabel tb_soal
            );

            $query = $this->m_soal->update($id, $data);
            if ($query) {
                $this->session->set_flashdata('info', 'Data Berhasil di Update');
                redirect('soal');
            }
        }
    }

    public function hapus($id)
    {
        $_id = $this->db->get_where('tb_soal',['id'=>$id])->row();
        $query = $this->db->delete('tb_soal',['id'=>$id]);
        if ($query = true) {
            unlink('assets/buku/gambar'.$_id->gambar);
            $this->session->set_flashdata('info', 'Data Berhasil Dihapus!');
            redirect('soal', 'refresh');
        }
    }
}
