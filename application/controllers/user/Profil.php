<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        
        $data = array(
			'content' => 'user/profil',
			'title' => 'Profil'
		);
		$this->load->view('template', $data);
        
        
    }

}
?>