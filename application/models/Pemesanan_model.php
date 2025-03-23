<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends MY_model {

    protected $tablePemesanan   = 'pemesanan';
    protected $tablePendaftaran = 'pendaftaran';
    protected $tableKategori    = 'kategori';
    protected $tablePaketHaji   = 'paket_haji';
    protected $tablePaketUmroh  = 'paket_umroh';
    protected $tablePaketWisata = 'paket_wisata';
    protected $tableProduk      = 'produk';

    public function __construct()
    {
        parent::__construct();
    }

    // Untuk DataTables (admin)
    public function dataTablesPemesanan(){
        $col_order  = array($this->tablePemesanan . '.id');
        $col_search = array($this->tablePemesanan . '.id');
        $order      = array($this->tablePemesanan . '.id' => 'desc');
        $filter     = array($this->tablePemesanan . '.deleted_at' => 0);
        $group_by   = null;
        $this->db->from($this->tablePemesanan);
        $this->db->select($this->tablePemesanan . '.*, ' . 
                          $this->tableKategori . '.nama_kategori, ' . 
                          $this->tableProduk . '.nama_paket, ' . 
                          $this->tableProduk . '.harga, ' . 
                          $this->tablePendaftaran . '.kode_pendaftaran, ' . 
                          $this->tablePendaftaran . '.nama_lengkap');
        $this->db->join($this->tableKategori, $this->tableKategori . '.id = ' . $this->tablePemesanan . '.id_kategori');
        $this->db->join($this->tableProduk, $this->tableProduk . '.id = ' . $this->tablePemesanan . '.id_produk');
        $this->db->join($this->tablePendaftaran, $this->tablePendaftaran . '.id = ' . $this->tablePemesanan . '.id_pendaftaran');
        $query = substr($this->db->get_compiled_select(), 6);
        $data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);
        $recordTotal =  $this->countAllQueryFiltered($query, $filter);
        $recordFiltered =  $this->count_filtered($query, $filter);
        return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
    }

    // Mengambil data pemesanan berdasarkan ID (termasuk kolom tagihan/no invoice)
    public function getPemesananByID($id){
        $this->db->where($this->tablePemesanan . '.id', $id);
        $this->db->select($this->tablePemesanan . '.*, ' .
                          $this->tablePendaftaran . '.nama_lengkap, ' .
                          $this->tableProduk . '.nama_paket, ' .
                          $this->tablePemesanan . '.tagihan');
        $this->db->join($this->tablePendaftaran, $this->tablePendaftaran . '.id = ' . $this->tablePemesanan . '.id_pendaftaran', 'left');
        $this->db->join($this->tableProduk, $this->tableProduk . '.id = ' . $this->tablePemesanan . '.id_produk', 'left');
        return $this->db->get($this->tablePemesanan);
    }

    public function updatePemesanan($id, $data){
        $this->db->where('id', $id);
        $this->db->update($this->tablePemesanan, $data);
        return $this->db->affected_rows();
    }

    public function insertPemesanan($data){
        $this->db->insert($this->tablePemesanan, $data);
        return $this->db->insert_id();
    }
    
    public function getAllKategoriNotDeleted(){
        $this->db->where('deleted_at', 0);
        return $this->db->get($this->tableKategori);
    }
    
    public function getAllKodePendaftaranNotDeleted(){
        $this->db->where('deleted_at', 0);
        return $this->db->get($this->tablePendaftaran);
    }

    public function getProdukByKategoriID($id){
        $this->db->where('deleted_at', 0);
        $this->db->where('id_kategori', $id);
        return $this->db->get($this->tableProduk);
    }

    public function getPendaftaranByID($id_pendaftaran) {
        $this->db->where('id', $id_pendaftaran);
        return $this->db->get($this->tablePendaftaran);
    }
    
    public function getPemesanan() {
        $this->db->select('kode_pemesanan, id_kategori, id_produk, tanggal_pemesanan, status');
        $this->db->from('pemesanan');
        $query = $this->db->get();
        return $query->result();
    }

    // Generate kode pemesanan dengan format "A-0001-H"
    public function generate_kode_pemesanan($kategori_huruf) {
        $this->db->select("kode_pemesanan");
        $this->db->from("pemesanan");
        $this->db->like("kode_pemesanan", "A-", "after");
        $this->db->order_by("kode_pemesanan", "DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();
        if ($row) {
            preg_match("/A-(\d+)-[A-Z]/", $row->kode_pemesanan, $matches);
            $last_number = isset($matches[1]) ? (int)$matches[1] : 0;
            $next_number = $last_number + 1;
        } else {
            $next_number = 1;
        }
        return "A-" . str_pad($next_number, 4, "0", STR_PAD_LEFT) . "-" . $kategori_huruf;
    }
    
    // Fungsi baru untuk menghasilkan No Invoice yang unik
    public function generate_no_invoice(){
        $date = date('Ymd'); // Tanggal hari ini: YYYYMMDD
        $this->db->select("tagihan");
        $this->db->from("pemesanan");
        // Cari nomor invoice yang sudah dibuat untuk hari ini dengan prefix INV-YYYYMMDD-
        $this->db->like("tagihan", "INV-".$date."-", "after");
        $this->db->order_by("tagihan", "DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();
        if($row){
            preg_match("/INV-".$date."-(\d+)/", $row->tagihan, $matches);
            $last_number = isset($matches[1]) ? (int)$matches[1] : 0;
            $next_number = $last_number + 1;
        } else {
            $next_number = 1;
        }
        return "INV-" . $date . "-" . str_pad($next_number, 4, "0", STR_PAD_LEFT);
    }
    
    // Mengambil data pemesanan milik user (termasuk kolom tagihan)
    public function getOrdersByUser($user_id) {
        $this->db->select($this->tablePemesanan . '.*, ' .
                          $this->tableProduk . '.nama_paket, ' .
                          $this->tablePendaftaran . '.kode_pendaftaran, ' .
                          $this->tablePendaftaran . '.nama_lengkap, ' .
                          $this->tablePemesanan . '.tagihan');
        $this->db->from($this->tablePemesanan);
        $this->db->join($this->tableProduk, $this->tableProduk . '.id = ' . $this->tablePemesanan . '.id_produk', 'left');
        $this->db->join($this->tablePendaftaran, $this->tablePendaftaran . '.id = ' . $this->tablePemesanan . '.id_pendaftaran', 'left');
        $this->db->where($this->tablePemesanan . '.id_pendaftaran', $user_id);
        $this->db->where($this->tablePemesanan . '.deleted_at', 0);
        return $this->db->get()->result();
    }
}
