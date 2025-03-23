<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Menggunakan model Pemesanan_model untuk mengambil data pemesanan (termasuk tagihan)
        $this->load->model('Pemesanan_model', 'pm');
    }
    
    // Tampilkan daftar tagihan (deskripsi detail) untuk user
    public function index(){
        // Ambil user_id dari session; gunakan dummy user_id = 3 untuk testing
        $user_id = $this->session->userdata('user_id');
        if(!$user_id){
            $user_id = 3; // Sesuaikan dengan data di database Anda
        }
        // Mengambil semua pemesanan milik user (termasuk tagihan)
        $data['pemesanan'] = $this->pm->getOrdersByUser($user_id);
        $data['title'] = 'Tagihan Saya';
        $data['content'] = 'user/tagihan';
        $this->load->view('template_user', $data);
    }
    
    // Jika ingin menampilkan detail invoice secara terpisah, bisa dibuat method detail()
    // Namun di sini, daftar tagihan sudah mencakup informasi invoice
}
