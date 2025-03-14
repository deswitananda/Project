<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['content'] = 'admin/testimoni';
        $this->load->view('template_admin', $data);
    }
}
?>