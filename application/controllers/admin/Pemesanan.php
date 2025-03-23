<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pemesanan_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index() {
        $data['content'] = 'admin/pemesanan';
        $this->load->view('template_admin', $data);
    }


    public function table_pemesanan_admin()
    {
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
            // Tentukan warna badge berdasarkan status
            $status_badge = ($da->status == 'Diterima') ? 'success'
                : (($da->status == 'Ditolak') ? 'danger' : 'warning');

            // Tambahkan badge status
            $row[] = '<span class="badge badge-' . $status_badge . '">' . $da->status . '</span>';

            $row[] = actBtnn($da->id, 'pemesanan_admin', $da->status);

            $data[] = $row;
        }

        $output = array(
            "draw" => isset($_POST['draw']) ? $_POST['draw'] : 1,
            "recordsTotal" => $q['recordTotal'],
            "recordsFiltered" => $q['recordFiltered'],
            "data" => $data,
        );

        // header('Content-Type: application/json');
        // echo json_encode($output, JSON_PRETTY_PRINT);
        // exit;


        echo json_encode($output);
    }

    public function delete_pemesanan_admin()
    {

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

    public function get_detail_pemesanan_admin($id){
        // Mengambil data dari database berdasarkan ID
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

    public function update_status_pemesanan()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
    
        if ($id && $status) {
            $update = $this->pm->updatePemesanan($id, ['status' => $status]);
    
            if ($update) {
                $ret = array(
                    'status' => true,
                    'message' => 'Status berhasil diperbarui'
                );
            } else {
                $ret = array(
                    'status' => false,
                    'message' => 'Gagal memperbarui status'
                );
            }
        } else {
            $ret = array(
                'status' => false,
                'message' => 'Data tidak lengkap'
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

	public function option_produk($id=null){

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
