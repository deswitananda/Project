<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'admin/artikel',
			'title' => 'Admin'
		);
		$this->load->view('template_admin', $data);
        
    }

}
?>