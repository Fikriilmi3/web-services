<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_dashboard extends CI_Model {

    public function total_user()
    {
        return $this->db->get('user')->num_rows();
    }

    public function total_soal()
    {
        return $this->db->get('tb_soal')->num_rows();
    }

    public function total_hasil()
    {
        return $this->db->get('tb_hasil')->num_rows();
    }

}
?>