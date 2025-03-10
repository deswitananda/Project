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
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('password', 'Password', 'trim|required', array('required' => '%s harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            $q = $this->User_model->login($email, $password);
            if ($q->num_rows() > 0) {
                // Ambil data user dari query
                $user = $q->row();
                // Ambil nilai role dari kolom 'role'
                $role = $user->role;

                // Set session
                $sess = array(
                    'is_login' => TRUE,
                    'email'    => $user->email,
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
                    'message' => 'Email atau Password Salah'
                );
            }
        }
        echo json_encode($ret);
    }
}
?>
