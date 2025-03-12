<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        $this->load->view('login');
    }

    public function proses_login()
    {
        // Ambil input username dan password
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi form: username dan password harus diisi
        $this->form_validation->set_rules('username', 'Username', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            // Panggil fungsi login di model dengan username dan password
            $q = $this->User_model->login($username, $password);
            if ($q && $q->num_rows() > 0) {
                // Ambil data user dari query
                $user = $q->row();
                // Ambil nilai role dari kolom 'role'
                $role = $user->role;

                // Set session dengan data user (username dan role)
                $sess = array(
                    'is_login' => TRUE,
                    'username' => $user->username,
                    'role'     => $role
                );
                $this->session->set_userdata($sess);

                $ret = array(
                    'status'  => true,
                    'message' => 'Login Berhasil',
                    'role'    => $role
                );
            } else {
                $ret = array(
                    'status'  => false,
                    'message' => 'Username atau Password Salah'
                );
            }
        }
        echo json_encode($ret);
    }
}
?>
