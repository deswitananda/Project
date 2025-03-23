<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_model extends MY_Model
{
    protected $tableKategoriArtikel = 'kategori_artikel';
    protected $tableArtikel         = 'artikel';

    public function __construct()
    {
        parent::__construct();
    }

    // Mengambil semua kategori artikel yang belum dihapus
    public function getAllKategoriArtikelNotDeleted()
    {
        $this->db->where('deleted_at', 0);
        return $this->db->get($this->tableKategoriArtikel);
    }

    // Mengambil kategori artikel berdasarkan ID
    public function getKategoriArtikelByID($id)
    {
        return $this->db->where('id', $id)
                        ->get($this->tableKategoriArtikel);
    }

    // Mengambil data kategori artikel untuk DataTables
    public function dataTablesKategoriArtikel()
    {
        // Kolom untuk pengurutan dan pencarian
        $col_order  = array(
            $this->tableKategoriArtikel . '.id',
            $this->tableKategoriArtikel . '.nama_kategori'
        );
        $col_search = array(
            $this->tableKategoriArtikel . '.id',
            $this->tableKategoriArtikel . '.nama_kategori'
        );

        // Urutan default berdasarkan id secara descending
        $order = array(
            $this->tableKategoriArtikel . '.id' => 'desc'
        );

        // Filter untuk mengambil data yang belum dihapus
        $filter = array(
            $this->tableKategoriArtikel . '.deleted_at' => 0
        );

        $group_by = null;

        // Menyiapkan query
        $this->db->from($this->tableKategoriArtikel);
        $this->db->select($this->tableKategoriArtikel . '.*');
        // Menghapus kata "SELECT" dari awal query (sesuaikan jika diperlukan)
        $query = substr($this->db->get_compiled_select(), 6);

        // Mendapatkan data menggunakan helper datatables yang telah diimplementasikan
        $data = $this->get_datatables($query, $col_order, $col_search, $order, $filter, $group_by);

        // Mendapatkan total record dan record yang terfilter
        $recordTotal    = $this->countAllQueryFiltered($query, $filter);
        $recordFiltered = $this->count_filtered($query, $filter);

        return array(
            'data'           => $data,
            'recordTotal'    => $recordTotal,
            'recordFiltered' => $recordFiltered
        );
    }

    // Mengecek apakah kategori artikel duplikat (selain record dengan ID tertentu)
    public function cekKategoriArtikelDuplicate($nama_kategori, $id)
    {
        if ($id) {
            $this->db->where('id !=', $id);
        }
        $this->db->where('nama_kategori', $nama_kategori);
        $this->db->where('deleted_at', 0);
        return $this->db->get($this->tableKategoriArtikel);
    }

    // Update kategori artikel berdasarkan ID
    public function updateKategoriArtikel($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->tableKategoriArtikel, $data);
        return $this->db->affected_rows();
    }

    // Insert kategori artikel baru
    public function insertKategoriArtikel($data)
    {
        $this->db->insert($this->tableKategoriArtikel, $data);
        return $this->db->insert_id();
    }

    //TABLE ARTIKEL--------------------------------------------------------------------

    public function getAllArtikelkNotDeleted()
    {
        $this->db->select($this->tableArtikel . '.*, ' . $this->tableKategoriArtikel . '.nama_kategori, ');
        $this->db->join($this->tableKategoriArtikel, $this->tableKategoriArtikel . '.id = ' . $this->tableArtikel . '.id_kategori');
        $this->db->where($this->tableArtikel . '.deleted_at', 0);
        return $this->db->get($this->tableArtikel);
    }
    public function dataTablesArtikel()
    {
        $col_order     = array($this->tableArtikel. '.id', $this->tableArtikel . '.id_kategori');
        $col_search = array($this->tableArtikel . '.id', $this->tableKategoriArtikel. '.nama_kategori');
        $order         = array($this->tableArtikel . '.id' => 'desc');
        $filter     = array($this->tableArtikel . '.deleted_at' => 0);
        $group_by     = null;
        $this->db->from($this->tableArtikel);
        $this->db->select($this->tableArtikel . '.*, ' . $this->tableKategoriArtikel . '.nama_kategori' );
        $this->db->join($this->tableKategoriArtikel, $this->tableKategoriArtikel . '.id = ' . $this->tableArtikel . '.id_kategori');
        $query = substr($this->db->get_compiled_select(), 6);
        $data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

        $recordTotal =  $this->countAllQueryFiltered($query, $filter);
        $recordFiltered =  $this->count_filtered($query, $filter);
        return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
    }

    public function cekArtikelDuplicate($id_kategori, $judul, $konten, $tanggal,  $id)
    {
        if ($id) {
            $this->db->where('id !=', $id);
        }
        $this->db->where('id_kategori', $id_kategori);
        $this->db->where('judul', $judul);
        $this->db->where('konten', $konten);
        $this->db->where('tanggal', $tanggal);
        $this->db->where('deleted_at', 0);
        return $this->db->get($this->tableStok);
    }
    public function updateArtikel($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update($this->tableArtikel, $data);
        return $this->db->affected_rows();
    }

    public function insertArtikel($data)
    {
        $this->db->insert($this->tableArtikel, $data);
        return $this->db->insert_id();
    }


    public function getArtikelkByID($id)
    {
        $this->db->where($this->tableArtikel . '.id', $id);
        return $this->db->get($this->tableArtikel);
    }


























    // public function dataTablesArtikel()
    // {
    //     $col_order     = array($this->tableArtikel . '.id', $this->tableArtikel . '.judul');
    //     $col_search = array($this->tableArtikel . '.id', $this->tableArtikel . '.judul', $this->tableKategoriArtikel . '.nama_kategori');
    //     $order         = array($this->tableArtikel . '.id' => 'desc');
    //     $filter     = array($this->tableArtikel . '.deleted_at' => 0);
    //     $group_by     = null;

    //     $this->db->from($this->tableArtikel);
    //     $this->db->select($this->tableArtikel . '.*,' . $this->tableKategoriArtikel . '.nama_kategori');
    //     $this->db->join($this->tableKategoriArtikel, $this->tableKategoriArtikel . '.id = ' . $this->tableArtikel . '.id_kategori');
    //     $query = substr($this->db->get_compiled_select(), 6);
    //     $data = $this->get_datatables($query, $col_order, $col_search, $order, $filter, $group_by);

    //     $recordTotal =  $this->countAllQueryFiltered($query, $filter);
    //     $recordFiltered =  $this->count_filtered($query, $filter);
    //     return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
    // }



}

