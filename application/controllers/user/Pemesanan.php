<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index(){
        $data = array(
            'content' => 'user/pemesanan',
            'title'   => 'Pemesanan'
        );
        $this->load->view('template_user', $data);
    }

    public function table_pemesanan_user(){
        $q = $this->pm->dataTablesPemesanan();

        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $da->kode_pemesanan;
            $row[] = $da->nama_kategori;
            $row[] = $da->nama_paket;
            $row[] = $da->nama_lengkap;
            $row[] = $da->harga;
            $row[] = $da->tanggal_pemesanan;
            // Badge status
            $status_badge = ($da->status == 'Diterima') ? 'success' 
                            : (($da->status == 'Ditolak') ? 'danger' : 'warning');
            $row[] = '<span class="badge badge-' . $status_badge . '">' . $da->status . '</span>';

            // Kolom Tagihan
            $row[] = $da->tagihan;

            // Tombol aksi (lihat detail jika status Diterima, atau tombol aksi lain)
            $row[] = ($da->status == 'Diterima')
                ? '<button type="button" class="btn btn-success btn-sm detailBtn" data-value="' . $da->id . '" data-toggle="modal" data-target="pemesanan_user">Lihat Detail</button>'
                : actBtn($da->id, 'pemesanan_user');

            $data[] = $row;
        }

        $output = array(
            "draw"            => isset($_POST['draw']) ? $_POST['draw'] : 1,
            "recordsTotal"    => $q['recordTotal'],
            "recordsFiltered" => $q['recordFiltered'],
            "data"            => $data,
        );
        echo json_encode($output);
    }

    public function edit_pemesanan_user(){
        $id = $this->input->post('id');
        $q = $this->pm->getPemesananByID($id);

        if ($q->num_rows() > 0) {
            $ret = array(
                'status'  => true,
                'data'    => $q->row(),
                'message' => '',
            );
        } else {
            $ret = array(
                'status'  => false,
                'data'    => [],
                'message' => 'Data tidak ditemukan',
                'query'   => $this->db->last_query()
            );
        }
        echo json_encode($ret);
    }

    public function delete_pemesanan_user(){
        $id = $this->input->post('id');
        $data['deleted_at'] = time();
        $q = $this->pm->updatePemesanan($id, $data);

        if ($q) {
            $ret['status']  = true;
            $ret['message'] = 'Data berhasil dihapus';
        } else {
            $ret['status']  = false;
            $ret['message'] = 'Data gagal dihapus';
        }
        echo json_encode($ret);
    }

    public function get_detail_pemesanan_user($id){
        $q = $this->pm->getPemesananByID($id);
        
        if ($q->num_rows() > 0) {
            $ret = array(
                'status'  => true,
                'data'    => $q->row(),
                'message' => '',
            );
        } else {
            $ret = array(
                'status'  => false,
                'data'    => [],
                'message' => 'Data tidak ditemukan',
                'query'   => $this->db->last_query()
            );
        }
        echo json_encode($ret);
    }

    public function save_pemesanan_user(){
        $id = $this->input->post('id');
        $data['id_kategori']     = $this->input->post('id_kategori');
        $data['id_pendaftaran']  = $this->input->post('id_pendaftaran');
        $data['id_produk']       = $this->input->post('id_produk');
        $data['tanggal_pemesanan'] = date('Y-m-d H:i:s');
        $data['updated_at']        = date('Y-m-d H:i:s');
        $data['deleted_at']        = 0;

        // Konversi id_kategori menjadi huruf kategori (misal: H = Haji, U = Umroh)
        $kategori = $this->input->post('id_kategori');
        switch ($kategori) {
            case 1:
                $kategori_huruf = 'H';
                break;
            case 2:
                $kategori_huruf = 'U';
                break;
            default:
                $kategori_huruf = 'X';
        }

        // Generate kode pemesanan menggunakan model
        $data['kode_pemesanan'] = $this->pm->generate_kode_pemesanan($kategori_huruf);

        $this->form_validation->set_rules('id_pendaftaran', 'Nama Lengkap', 'trim|required', array('required' => '%s harus diisi'));

        if ($this->form_validation->run() == FALSE) {
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            if ($id) {
                $update = $this->pm->updatePemesanan($id, $data);
                $ret = $update ? 
                    array('status' => true, 'message' => 'Data berhasil diupdate') : 
                    array('status' => false, 'message' => 'Data gagal diupdate');
            } else {
                $data['created_at'] = date('Y-m-d H:i:s');
                $insert = $this->pm->insertPemesanan($data);
                $ret = $insert ? 
                    array('status' => true, 'message' => 'Data berhasil disimpan', 'kode_pemesanan' => $data['kode_pemesanan']) : 
                    array('status' => false, 'message' => 'Data gagal disimpan');
            }
        }
        echo json_encode($ret);
    }

    // Opsi untuk load data select kategori
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

    public function option_pendaftaran(){
        $q = $this->pm->getAllKodePendaftaranNotDeleted();
        $ret = '<option value="">Pilih</option>';
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $ret .= '<option value="' . $row->id . '">' . $row->kode_pendaftaran . '</option>';
            }
        }
        echo $ret;
    }

    public function option_produk($id = null){
        $q = $this->pm->getProdukByKategoriID($id);
        $ret = '<option value="">Pilih Paket</option>';
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $row) {
                $ret .= '<option value="' . $row->id . '">' . $row->nama_paket . '</option>';
            }
        }
        echo $ret;
    }

    public function getPendaftaranData($id_pendaftaran) {
        $q = $this->pm->getPendaftaranByID($id_pendaftaran);
        if ($q->num_rows() > 0) {
            $data = $q->row();
            $response = array(
                'status'           => true,
                'nama_lengkap'     => $data->nama_lengkap,
                'kode_pendaftaran' => $data->kode_pendaftaran,
                'no_hp_pendaftar'  => $data->no_hp_pendaftar
            );
        } else {
            $response = array(
                'status'  => false,
                'message' => 'Data pendaftaran tidak ditemukan'
            );
        }
        echo json_encode($response);
    }

    public function get_pemesanan() {
        $data['pemesanan'] = $this->pm->getPemesanan();
        echo json_encode($data['pemesanan']);
    }
}
