<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/dashboard',
			'title' => 'Dashboard'
		);
		$this->load->view('template', $data);
        
    }

}
?>