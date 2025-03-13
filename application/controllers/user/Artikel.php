<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/artikel',
			'title' => 'Artikel'
		);
		$this->load->view('template', $data);
        
    }

}
?>