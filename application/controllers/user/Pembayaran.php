<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/pembayaran',
			'title' => 'Pembayaran'
		);
		$this->load->view('template', $data);
        
    }

}
?>