<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $this->load->view('admin/pemesanan');
        $this->load->view('template');
        
    }

}
?>