<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Pemesanan_model');
        $this->load->model('Paket_model');
        // Untuk testing: jika session user_id belum ada, gunakan dummy user_id = 1.
    }

    // Tampilkan halaman pemesanan user (deskripsi pesanan)
    public function index(){
        $data['paket'] = $this->Paket_model->get_all_paket();
        $user_id = $this->session->userdata('user_id');
        if(!$user_id){
            $user_id = 1;
        }
        $data['orders'] = $this->Pemesanan_model->get_orders_by_user($user_id);
        $data['title'] = 'Pemesanan';
        $data['content'] = 'user/pemesanan';
        $this->load->view('template_user', $data);
    }

    // Simpan pesanan baru
    public function store(){
        $user_id = $this->session->userdata('user_id');
        if(!$user_id){
            $user_id = 1;
        }
        $paket_id = $this->input->post('paket_id');

        $data = array(
            'user_id'       => $user_id,
            'paket_id'      => $paket_id,
            'order_number'  => uniqid('ORD-'),
            'status'        => 'Menunggu Pembayaran',
            'payment_status'=> 'Belum Lunas'
        );

        if($this->Pemesanan_model->insert_order($data)){
            $this->session->set_flashdata('success', 'Pemesanan berhasil dibuat. Silakan tunggu pembayaran.');
        } else {
            $this->session->set_flashdata('error', 'Gagal membuat pemesanan.');
        }
        redirect('user/pemesanan');
    }
}
