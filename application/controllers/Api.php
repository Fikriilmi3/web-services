<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Api_model');
    }

    //API LOGIN
    public function login_post()
    {
        $username = $this->post('username');
        $password = $this->post('password');

        $query = $this->Api_model->get_by_username($username);

        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            if (password_verify($password, $result['password'])) {
                $this->response([
                    'status' => true,
                    'data' => $result,
                    'message' => 'Login berhasil'
                ], 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Username atau Password salah'
                ], 200);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Pengguna tidak terdaftar'
            ], 200);
        }
    }

    //API REGISTRASI
    public function register_post()
    {
        $params = array(
            'username' => $this->post('username'),
            'nama_anak' => $this->post('nama_anak'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'tempat_lahir' => $this->post('tempat_lahir'),
            'tgl_lahir' => $this->post('tgl_lahir'),
            'nama_ibu' => $this->post('nama_ibu'),
            'telepone' => $this->post('telepone'),
            'password' => password_hash($this->post('password'), PASSWORD_DEFAULT),
        );
        $this->Api_model->add_pengguna($params);

        $this->response([
            'status' => true,
            'message' => 'Registrasi berhasil'
        ], 200);
    }

    //API GET DATA
    public function data_get()
    {
        $id = $this->get('id');

        $data = $this->Api_model->get_id($id)->row_array();

        if ($data) {
            $this->response([
                'status' => true,
                'data' => $data,
            ], 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Login'
            ], 200);
        }
    }

    //API UPDATE
    public function update_post()
    {
        if (empty($this->post('password'))) {
            $params = array(
                'username' => $this->post('username'),
                'password' => $this->post('password'),
            );
            $this->Api_model->ubah_pengguna($this->post('id'), $params);
        } else {
            $params = array(
                'username' => $this->post('username'),
                'nama_anak' => $this->post('nama_anak'),
                'jenis_kelamin' => $this->post('jenis_kelamin'),
                'tempat_lahir' => $this->post('tempat_lahir'),
                'tgl_lahir' => $this->post('tgl_lahir'),
                'nama_ibu' => $this->post('nama_ibu'),
                'telepone' => $this->post('telepone'),
                'password' => password_hash($this->post('password'), PASSWORD_DEFAULT),
            
            );
            $this->Api_model->ubah_pengguna($this->post('id'), $params);
        }

        $this->response([
            'status' => true,
            'message' => 'Ubah berhasil'
        ], 200);
    }
}
