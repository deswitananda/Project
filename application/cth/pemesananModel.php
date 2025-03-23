<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan_model extends CI_Model {

    // Untuk admin: ambil semua pesanan (join ke akun_user dan paket)
    public function get_all_orders() {
        $this->db->select('pemesanan.*, pemesanan.payment_status, akun_user.username as user_name, paket.name as paket_name');
        $this->db->from('pemesanan');
        $this->db->join('akun_user', 'pemesanan.user_id = akun_user.id', 'left');
        $this->db->join('paket', 'pemesanan.paket_id = paket.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }
    

    // Untuk user: ambil pesanan berdasarkan user_id
    public function get_orders_by_user($user_id) {
        $this->db->select('pemesanan.*, paket.name as paket_name, pemesanan.id');
        $this->db->from('pemesanan');
        $this->db->join('paket', 'pemesanan.paket_id = paket.id', 'left');
        $this->db->where('pemesanan.user_id', $user_id);
        $query = $this->db->get();
        return $query->result();
    }

    // Masukkan data pemesanan baru
    public function insert_order($data) {
        return $this->db->insert('pemesanan', $data);
    }

    // Update pesanan, misalnya untuk mengubah status pembayaran
    public function update_order($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('pemesanan', $data);
    }

    // Ambil detail pesanan berdasarkan ID (untuk tampilan user)
    public function get_order_by_id($id) {
        $this->db->where('id', $id);
        return $this->db->get('pemesanan')->row();
    }
}
