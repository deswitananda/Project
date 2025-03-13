<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $this->load->view('register');
    }

    public function proses_register()
    {
        $username = $this->input->post('username', true);
        $email    = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        // Aturan validasi
        $this->form_validation->set_rules('username', 'Username', 'trim|required',
            array('required' => '%s harus diisi')
        );
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',
            array(
                'required' => '%s harus diisi',
                'valid_email' => '%s tidak valid'
            )
        );
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',
            array(
                'required' => '%s harus diisi',
                'min_length' => '%s minimal 6 karakter'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal -> kirimkan error
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            // Validasi lolos -> proses ke model
            $register = $this->User_model->register($username, $email, $password);

            if ($register) {
                // Berhasil daftar
                $ret = array(
                    'status'  => true,
                    'message' => 'Pendaftaran berhasil!'
                );
            } else {
                // Gagal daftar (misal: email sudah terpakai)
                $ret = array(
                    'status'  => false,
                    'message' => 'Gagal mendaftar. Email mungkin sudah terdaftar.'
                );
            }
        }
        echo json_encode($ret);
    }
}
