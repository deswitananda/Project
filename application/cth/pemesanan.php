<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        // Pastikan admin telah login (sesuaikan mekanisme autentikasi)
        $this->load->model('Pemesanan_model');
    }

    // Tampilkan tabel pesanan beserta status pembayaran
    public function index(){
        $data['orders'] = $this->Pemesanan_model->get_all_orders();
        $data['title'] = 'Data Pemesanan';
        $data['content'] = 'admin/pemesanan';
        $this->load->view('template_admin', $data);
    }

    // Form untuk mengedit status pembayaran (misalnya mengubah antara "Lunas" dan "Belum Lunas")
    public function edit($order_id){
        $data['order'] = $this->Pemesanan_model->get_order_by_id($order_id);
        if(!$data['order']){
            show_404();
        }
        $data['title'] = 'Edit Status Pembayaran';
        $data['content'] = 'admin/pembayaran';
        $this->load->view('template_admin', $data);
    }

    // Proses update status pembayaran
    public function update($order_id){
        $status = $this->input->post('status');
        $payment_status = $this->input->post('payment_status');

        $updateData = array(
            'status' => $status,
            'payment_status' => $payment_status
        );
        if($this->Pemesanan_model->update_order($order_id, $updateData)){
            $this->session->set_flashdata('success', 'Status pembayaran berhasil diperbarui.');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui status pembayaran.');
        }
        redirect('admin/pemesanan');
    }
}
