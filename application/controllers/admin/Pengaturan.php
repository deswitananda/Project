<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        check_login();
        check_role('admin');
        $data['content'] = 'admin/pengaturan';
        $this->load->view('template_admin', $data);
    }
}
