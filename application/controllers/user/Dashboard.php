<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        // Cek apakah user sudah login dan memiliki role 'user'
        if (!$this->session->userdata('is_login') || $this->session->userdata('role') !== 'user') {
            redirect('login'); // Redirect ke halaman login jika belum login
        }
    }

    public function index()
    {
        check_login();
        check_role('user');

        $data = array(
            'content' => 'user/dashboard',
            'title' => 'Dashboard'
        );
        $this->load->view('template_user', $data);

    }

}
?>