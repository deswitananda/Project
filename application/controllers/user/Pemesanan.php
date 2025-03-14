<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/pemesanan',
			'title' => 'Pemesanan'
		);
		$this->load->view('template_user', $data);
        
    }

}
?>