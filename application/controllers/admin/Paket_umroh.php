<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_umroh extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
			'content' => 'admin/paket_umroh',
			'title' => 'Paket Umroh'
		);
		$this->load->view('template_admin', $data);
        
    }

}
?>