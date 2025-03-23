<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends MY_model{

	protected $tablePemesanan = 'pemesanan';
	protected $tablePendaftaran = 'pendaftaran';
    protected $tableKategori = 'kategori';
    protected $tablePaketHaji = 'paket_haji';
    protected $tablePaketUmroh = 'paket_umroh';
    
	protected $tablePaketWisata = 'paket_wisata';
	protected $tableProduk = 'produk';


	public function __construct()
	{
		parent::__construct();
	}


    // public function dataTablesPemesanan(){
    //     $col_order 	= array($this->tablePemesanan . '.id');
    //     $col_search = array($this->tablePemesanan . '.id');
    //     $order 		= array($this->tablePemesanan . '.id' => 'desc');
    //     $filter 	= array($this->tablePemesanan . '.deleted_at' => 0);
    //     $group_by 	= null;
    
    //     // Pilih kolom yang dibutuhkan
    //     $this->db->select("
    //         {$this->tablePemesanan}.*,
    //         {$this->tableKategori}.nama_kategori,
    //         {$this->tablePendaftaran}.kode_pendaftaran,
    //         {$this->tablePendaftaran}.no_hp_pendaftar,
    //         CASE 
    //             WHEN {$this->tableKategori}.nama_kategori = 'haji' THEN paket_haji.nama_paket
    //             WHEN {$this->tableKategori}.nama_kategori = 'umroh' THEN paket_umroh.nama_paket
    //             WHEN {$this->tableKategori}.nama_kategori = 'wisata' THEN paket_wisata.nama_paket
    //         END AS nama_paket
    //     ");
    
    //     // Dari tabel pemesanan
    //     $this->db->from($this->tablePemesanan);
    
    //     // Join ke tabel kategori
    //     $this->db->join($this->tableKategori, "{$this->tableKategori}.id = {$this->tablePemesanan}.id_kategori", "left");
    
    //     // Join ke tabel pendaftaran
    //     $this->db->join($this->tablePendaftaran, "{$this->tablePendaftaran}.id = {$this->tablePemesanan}.id_pendaftaran", "left");
    
    //     // Join ke tabel paket dengan kondisi kategori yang benar
    //     $this->db->join("paket_haji", "paket_haji.id = {$this->tablePemesanan}.id_produk AND {$this->tableKategori}.nama_kategori = 'haji'", "left");
    //     $this->db->join("paket_umroh", "paket_umroh.id = {$this->tablePemesanan}.id_produk AND {$this->tableKategori}.nama_kategori = 'umroh'", "left");
    //     $this->db->join("paket_wisata", "paket_wisata.id = {$this->tablePemesanan}.id_produk AND {$this->tableKategori}.nama_kategori = 'wisata'", "left");
    
    //     $query = substr($this->db->get_compiled_select(), 6);
    //     $data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);
    
    //     $recordTotal =  $this->countAllQueryFiltered($query, $filter);
    //     $recordFiltered =  $this->count_filtered($query, $filter);
    
    //     return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
    // }


    public function dataTablesPemesanan(){
		$col_order 	= array($this->tablePemesanan . '.id');
		$col_search = array($this->tablePemesanan . '.id');
		$order 		= array($this->tablePemesanan . '.id' => 'desc');
		$filter 	= array($this->tablePemesanan . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePemesanan;
		$this->db->from($this->tablePemesanan);
        $this->db->select($this->tablePemesanan . '.*, ' . $this->tableKategori . '.nama_kategori, ' . $this->tableProduk . '.nama_paket, '. $this->tableProduk . '.harga,'. $this->tablePendaftaran . '.kode_pendaftaran,'. $this->tablePendaftaran . '.nama_lengkap');
		$this->db->join($this->tableKategori, $this->tableKategori . '.id = ' . $this->tablePemesanan . '.id_kategori');
		$this->db->join($this->tableProduk, $this->tableProduk . '.id = ' . $this->tablePemesanan . '.id_produk');
		$this->db->join($this->tablePendaftaran, $this->tablePendaftaran . '.id = ' . $this->tablePemesanan . '.id_pendaftaran');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

    public function getPemesananByID($id){
		$this->db->where($this->tablePemesanan . '.id', $id);
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

    // public function getProdukByKategoriID($id_kategori) {
    //     $this->db->select("id, nama_paket");
    //     $this->db->from("paket_haji");  // Default ke paket_haji dulu
    //     $this->db->where("id_kategori", $id_kategori);
    
    //     $query1 = $this->db->get_compiled_select();
    
    //     $this->db->select("id, nama_paket");
    //     $this->db->from("paket_umroh");
    //     $this->db->where("id_kategori", $id_kategori);
    
    //     $query2 = $this->db->get_compiled_select();
    
    //     $this->db->select("id, nama_paket");
    //     $this->db->from("paket_wisata");
    //     $this->db->where("id_kategori", $id_kategori);
    
    //     $query3 = $this->db->get_compiled_select();
    
    //     $final_query = "($query1) UNION ($query2) UNION ($query3)";
    //     return $this->db->query($final_query);
    // }
    
    public function getProdukByKategoriID($id){
		$this->db->where('deleted_at', 0);
		$this->db->where('id_kategori', $id);
		return $this->db->get($this->tableProduk);
	}

    public function getPendaftaranByID($id_pendaftaran) {
        $this->db->where('id', $id_pendaftaran);  // Mencocokkan dengan id pendaftaran
        return $this->db->get($this->tablePendaftaran); // Mengambil data dari tabel pendaftaran
    }
    


    public function getPemesanan() {
        // Query untuk mengambil data pemesanan
        $this->db->select('kode_pemesanan, id_kategori, id_produk, tanggal_pemesanan, status');
        $this->db->from('pemesanan'); // Nama tabel yang berisi data pemesanan
        $query = $this->db->get();

        // Mengembalikan data sebagai array objek
        return $query->result();
    }

    public function generate_kode_pemesanan($kategori_huruf) {
        // Ambil kode terakhir dengan format A-XXXX-H
        $this->db->select("kode_pemesanan");
        $this->db->from("pemesanan");
        $this->db->like("kode_pemesanan", "A-", "after");
        $this->db->order_by("kode_pemesanan", "DESC");
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row();

        if ($row) {
            // Ambil angka dari format A-XXXX-H
            preg_match("/A-(\d+)-[A-Z]/", $row->kode_pemesanan, $matches);
            $last_number = isset($matches[1]) ? (int)$matches[1] : 0;
            $next_number = $last_number + 1;
        } else {
            $next_number = 1; // Jika belum ada data
        }

        // Format nomor urut menjadi 4 digit
        return "A-" . str_pad($next_number, 4, "0", STR_PAD_LEFT) . "-" . $kategori_huruf;
    }
    
    
    
}