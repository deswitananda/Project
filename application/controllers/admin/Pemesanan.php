<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index() {
        $data['content'] = 'admin/pemesanan';
        $this->load->view('template_admin', $data);
    }
}
