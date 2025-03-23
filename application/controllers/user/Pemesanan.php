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
			'title' => 'Pemesanan'
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
            // Tentukan warna badge berdasarkan status
            $status_badge = ($da->status == 'Diterima') ? 'success'
                : (($da->status == 'Ditolak') ? 'danger' : 'warning');

            // Tambahkan badge status
            $row[] = '<span class="badge badge-' . $status_badge . '">' . $da->status . '</span>';

            // Tentukan tombol aksi
            $row[] = ($da->status == 'Diterima')
                ? '<button type="button" class="btn btn-success btn-sm detailBtn" data-value="' . $da->id . '" data-toggle="modal" data-target="pemesanan_user">Lihat Detail </button>'
                : actBtn($da->id, 'pemesanan_user');

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

    public function edit_pemesanan_user(){

        $id = $this->input->post('id');
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

    public function delete_pemesanan_user(){

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

    public function get_detail_pemesanan_user($id){
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

    public function save_pemesanan_user()
    {
        $id = $this->input->post('id');
        $data['id_kategori'] = $this->input->post('id_kategori');
        $data['id_pendaftaran'] = $this->input->post('id_pendaftaran');
        $data['id_produk'] = $this->input->post('id_produk');
        $data['tanggal_pemesanan'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['deleted_at'] = 0;
    
        // Mendapatkan kategori yang dipilih
        $kategori = $this->input->post('id_kategori');  // Misal kategori 1 = 'H' untuk Haji
        // Anda bisa mengganti logika ini sesuai dengan data kategori yang ada di sistem Anda
        switch ($kategori) {
            case 1:
                $kategori_huruf = 'H';  // Kategori Haji
                break;
            case 2:
                $kategori_huruf = 'U';  // Kategori Umroh
                break;
            default:
                $kategori_huruf = 'X';  // Kategori lain atau default
        }
    
        // Mendapatkan angka urut untuk kode_pemesanan
        $this->db->select('MAX(CAST(SUBSTRING(kode_pemesanan, 3, LENGTH(kode_pemesanan) - 5) AS UNSIGNED)) as max_kode');
        $this->db->where('kode_pemesanan LIKE', 'A-%');
        $query = $this->db->get('pemesanan');
        $row = $query->row();
    
        // Set angka urut, jika tidak ada maka dimulai dari 1
        $next_number = ($row->max_kode) ? $row->max_kode + 1 : 1;
    
        // Format kode_pemesanan, misalnya A-0001
        $kode_pemesanan = 'A-' . str_pad($next_number, 4, '0', STR_PAD_LEFT);
    
        // Menambahkan kategori yang dipilih di belakang kode
        $kode_pemesanan .= '-' . $kategori_huruf;
    
        // Masukkan kode_pemesanan ke data
        $data['kode_pemesanan'] = $kode_pemesanan;
    
        $this->form_validation->set_rules('id_pendaftaran', 'Nama Lengkap', 'trim|required', array('required' => '%s harus diisi'));
    
        if ($this->form_validation->run() == FALSE) {
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            if ($id) {
                $update = $this->pm->updatePemesanan($id, $data);
                if ($update) {
                    $ret = array(
                        'status' => true,
                        'message' => 'Data berhasil diupdate'
                    );
                } else {
                    $ret = array(
                        'status' => false,
                        'message' => 'Data gagal diupdate'
                    );
                }
            } else {
                $data['created_at'] = date('Y-m-d H:i:s');
                $insert = $this->pm->insertPemesanan($data);
    
                if ($insert) {
                    $ret = array(
                        'status' => true,
                        'message' => 'Data berhasil disimpan',
                        'kode_pemesanan' => $kode_pemesanan  // Kode pemesanan yang baru
                    );
                } else {
                    $ret = array(
                        'status' => false,
                        'message' => 'Data gagal disimpan'
                    );
                }
            }
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


    public function getPendaftaranData($id_pendaftaran) {
        $q = $this->pm->getPendaftaranByID($id_pendaftaran); // Panggil fungsi model
    
        if ($q->num_rows() > 0) {
            $data = $q->row(); // Ambil data pendaftaran
            $response = array(
                'status' => true,
                'nama_lengkap' => $data->nama_lengkap,
                'kode_pendaftaran' => $data->kode_pendaftaran,
                'no_hp_pendaftar' => $data->no_hp_pendaftar
            );
        } else {
            $response = array(
                'status' => false,
                'message' => 'Data pendaftaran tidak ditemukan'
            );
        }
    
        echo json_encode($response);
    }
    
    
    
    public function get_pemesanan() {
        // Ambil data pemesanan dari database
        $data['pemesanan'] = $this->pm->getPemesanan();  // Fungsi ini menyesuaikan dengan model yang kamu buat
        echo json_encode($data['pemesanan']);
    }


}
?>