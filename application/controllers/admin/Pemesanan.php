<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm');
        $this->load->helper('actionbtn'); // Pastikan helper ini mengembalikan tombol aksi yang diinginkan
    }

    // Tampilan utama halaman admin (tabel pemesanan dan tagihan)
    public function index() {
        check_login();
        check_role('admin');
        $data['content'] = 'admin/pemesanan';
        $this->load->view('template_admin', $data);
    }

    // Mengambil data untuk DataTables (termasuk kolom tagihan)
    public function table_pemesanan_admin() {
        $q = $this->pm->dataTablesPemesanan();

        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 0;

        foreach ($q['data'] as $da) {
            $no++;
            $row = array();
            // Kolom 1: No
            $row[] = $no;
            // Kolom 2: Kode Pemesanan
            $row[] = $da->kode_pemesanan;
            // Kolom 3: Kategori
            $row[] = $da->nama_kategori;
            // Kolom 4: Nama Paket
            $row[] = $da->nama_paket;
            // Kolom 5: Nama Lengkap
            $row[] = $da->nama_lengkap;
            // Kolom 6: Harga
            $row[] = $da->harga;
            // Kolom 7: Tanggal Pemesanan
            $row[] = $da->tanggal_pemesanan;
            // Kolom 8: Status (dengan badge warna)
            $status_badge = ($da->status == 'Diterima') ? 'success'
                : (($da->status == 'Ditolak') ? 'danger' : 'warning');
            $row[] = '<span class="badge badge-' . $status_badge . '">' . $da->status . '</span>';
            // Kolom 9: Tagihan
            $row[] = $da->tagihan;
            // Kolom 10: Aksi (misalnya tombol Ubah Tagihan, Detail, Hapus)
            $editTagihanBtn = '<button class="btn btn-sm btn-primary openModalTagihan" 
                                data-id="'.$da->id.'" 
                                data-tagihan="'.$da->tagihan.'" 
                                data-status="'.$da->status.'">
                                Ubah Tagihan
                               </button>';
            $detailBtn = '<button class="btn btn-sm btn-info detailPemesanan" data-id="'.$da->id.'">Detail</button>';
            $deleteBtn = '<button class="btn btn-sm btn-danger deletePemesanan" data-id="'.$da->id.'">Hapus</button>';
            $row[] = $editTagihanBtn.' '.$detailBtn.' '.$deleteBtn;

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 1,
            "recordsTotal" => $q['recordTotal'],
            "recordsFiltered" => $q['recordFiltered'],
            "data" => $data,
        );

        echo json_encode($output);
    }

    // Update status dan tagihan melalui AJAX
    public function update_status_pemesanan() {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $tagihan = $this->input->post('tagihan');

        if ($id && $status && $tagihan) {
            $update = $this->pm->updatePemesanan($id, ['status' => $status, 'tagihan' => $tagihan]);
            if ($update) {
                $ret = array('status' => true, 'message' => 'Status dan tagihan berhasil diperbarui');
            } else {
                $ret = array('status' => false, 'message' => 'Gagal memperbarui data');
            }
        } else {
            $ret = array('status' => false, 'message' => 'Data tidak lengkap');
        }
        echo json_encode($ret);
    }

    // Fungsi lain seperti delete, get_detail, option_kategori, option_produk tetap sama...
    public function delete_pemesanan_admin() {
        $id = $this->input->post('id');
        $data['deleted_at'] = time();
        $q = $this->pm->updatePemesanan($id, $data);
        if ($q) {
            $ret['status'] = true;
            $ret['message'] = 'Data berhasil dihapus';
        } else {
            $ret['status'] = false;
            $ret['message'] = 'Data gagal dihapus';
        }
        echo json_encode($ret);
    }
    
    public function get_detail_pemesanan_admin($id) {
        $q = $this->pm->getPemesananByID($id);
        if ($q->num_rows() > 0) {
            $ret = array(
                'status' => true,
                'data' => $q->row(),
                'message' => '',
            );
        } else {
            $ret = array(
                'status' => false,
                'data' => [],
                'message' => 'Data tidak ditemukan',
                'query' => $this->db->last_query()
            );
        }
        echo json_encode($ret);
    }

    public function option_kategori(){
        $q = $this->pm->getAllKategoriNotDeleted();
        $ret = '<option value="">Pilih Kategori</option>';
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $ret .= '<option value="' . $row->id . '">' . $row->nama_kategori . '</option>';
            }
        }
        echo $ret;
    }

    public function option_produk($id = null) {
        $q = $this->pm->getProdukByKategoriID($id);
        $ret = '<option value="">Pilih Paket</option>';
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $ret .= '<option value="' . $row->id . '">' . $row->nama_paket . '</option>';
            }
        }
        echo $ret;
    }
}
