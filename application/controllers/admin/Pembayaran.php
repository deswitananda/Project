<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Pastikan admin telah login (sesuaikan autentikasi jika perlu)
        $this->load->model('Pemesanan_model');
    }

    // Method untuk menampilkan halaman edit pembayaran berdasarkan order_id
    public function index($order_id) {
        check_login();
        check_role('admin');
        $order = $this->Pemesanan_model->get_order_by_id($order_id);
        if(!$order){
            show_404();
        }
        $data['order'] = $order; // kirim variabel order ke view
        $data['title'] = 'Edit Status Pembayaran';
        $data['content'] = 'admin/pembayaran'; // view di folder admin/pembayaran.php
        $this->load->view('template_admin', $data);
    }
}
