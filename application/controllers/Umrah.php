<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umrah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('layouts/header');
        $this->load->view('layouts/umrah');
    }
}
