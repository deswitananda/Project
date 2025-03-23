<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('login');  // Pastikan ada view login
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
            // Ambil data user berdasarkan username
            $q = $this->User_model->login($username);
            if ($q && $q->num_rows() > 0) {
                $user = $q->row();
                if (password_verify($password, $user->password)) {
                    $role = $user->role;

                    // Set session dengan user_id
                    // Set session setelah login sukses
                    $sess = array(
                        'is_login' => TRUE,
                        'id_user' => $user->id,   // Simpan ID user ke session
                        'username' => $user->username,
                        'role' => $role
                    );
                    $this->session->set_userdata($sess);


                    // Redirect berdasarkan role
                    if ($role == 'admin') {
                        $redirect = base_url('admin/pendaftaran');
                    } else {
                        $redirect = base_url('user/pendaftaran');
                    }

                    $ret = array(
                        'status' => true,
                        'message' => 'Login Berhasil',
                        'role' => $role,
                        'redirect' => $redirect
                    );
                } else {
                    $ret = array(
                        'status' => false,
                        'message' => 'Username atau Password Salah'
                    );
                }
            } else {
                $ret = array(
                    'status' => false,
                    'message' => 'Username atau Password Salah'
                );
            }
        }
        echo json_encode($ret);
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login'); // Redirect ke halaman login setelah logout
    }

}
