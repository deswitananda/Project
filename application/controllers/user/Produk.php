<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/produk',
			'title' => 'Produk'
		);
		$this->load->view('template_user', $data);
        
    }

}
?>