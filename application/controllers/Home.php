<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $this->load->view('layouts/header');
        $this->load->view('home');
        $this->load->view('layouts/perusahaan');
        $this->load->view('layouts/paket');
        $this->load->view('layouts/blog');
        $this->load->view('layouts/footer');
    }

}
?>  