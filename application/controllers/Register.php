<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $this->load->view('register');  // Pastikan ada view register
    }

    public function proses_register()
    {
        $username = $this->input->post('username', true);
        $email    = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        $role     = 'user'; // Role default, bisa diubah sesuai kebutuhan
    
        // Aturan validasi
        $this->form_validation->set_rules('username', 'Username', 'trim|required',
            array('required' => '%s harus diisi')
        );
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
            array(
                'required'    => '%s harus diisi',
                'valid_email' => '%s tidak valid'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',
            array(
                'required'   => '%s harus diisi',
                'min_length' => '%s minimal 6 karakter'
            )
        );
    
        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kirimkan pesan error
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            // Lolos validasi, hash password terlebih dahulu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
            // Buat data array di controller
            $data = [
                'username'   => $username,
                'email'      => $email,
                'password'   => $hashed_password,
                'role'       => $role,
                'created_at' => date('Y-m-d H:i:s'),    // Menggunakan timestamp, bisa juga date('Y-m-d H:i:s')
                'updated_at' => date('Y-m-d H:i:s'),
                'deleted_at' => 0         // 0 menandakan belum terhapus
            ];
    
            // Panggil model untuk insert data ke database
            // Misalnya, fungsi register di model menerima array data
            $register = $this->User_model->register($data);
    
            if ($register) {
                $ret = [
                    'status'  => true,
                    'message' => 'Pendaftaran berhasil!'
                ];
            } else {
                $ret = [
                    'status'  => false,
                    'message' => 'Gagal mendaftar. Email mungkin sudah terdaftar.'
                ];
            }
        }
        echo json_encode($ret);
    }
    
}
