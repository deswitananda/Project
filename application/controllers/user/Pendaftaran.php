<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index()
    {
        check_login();
        check_role('user');
        $data['content'] = 'user/pendaftaran';
        $this->load->view('template_user', $data);
    }

    public function table_pendaftaran_user()
    {
        $q = $this->pm->dataTablesPendaftaran();

        $data = array();
        $no = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $da->kode_pendaftaran;
            $row[] = $da->nama_lengkap;
            $row[] = $da->jenis_kelamin;
            $row[] = $da->no_hp_pendaftar;
            $row[] = $da->alamat;
            $row[] = $da->email_pendaftar;
            // Tentukan warna badge berdasarkan status
            $status_badge = ($da->status == 'Diterima') ? 'success'
                : (($da->status == 'Ditolak') ? 'danger' : 'warning');

            // Tambahkan badge status
            $row[] = '<span class="badge badge-' . $status_badge . '">' . $da->status . '</span>';

            // Tentukan tombol aksi
            $row[] = ($da->status == 'Diterima')
                ? '<button type="button" class="btn btn-success btn-sm detailBtn" data-value="' . $da->id . '" data-toggle="modal" data-target="pendaftaran_user">Lihat Detail </button>'
                : actBtn($da->id, 'pendaftaran_user');

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

    public function edit_pendaftaran_user()
    {

        $id = $this->input->post('id');
        $q = $this->pm->getPendaftaranByID($id);

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

    public function save_pendaftaran_user()
    {
        $id = $this->input->post('id');
        $data['nama_lengkap'] = $this->input->post('nama_lengkap');
        $data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
        $data['nomor_ktp'] = $this->input->post('nomor_ktp');
        $data['nomor_paspor'] = $this->input->post('nomor_paspor');
        $data['email_pendaftar'] = $this->input->post('email_pendaftar');
        $data['no_hp_pendaftar'] = $this->input->post('no_hp_pendaftar');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['riwayat_kesehatan'] = $this->input->post('riwayat_kesehatan');
        $data['alamat'] = $this->input->post('alamat');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['deleted_at'] = 0;
    
        // Mendapatkan angka urut untuk kode_pendaftaran
        $this->db->select('MAX(CAST(SUBSTRING(kode_pendaftaran, 3) AS UNSIGNED)) as max_kode');
        $this->db->where('kode_pendaftaran LIKE', 'A-%');
        $query = $this->db->get('pendaftaran');
        $row = $query->row();
    
        // Set angka urut, jika tidak ada maka dimulai dari 1
        $next_number = ($row->max_kode) ? $row->max_kode + 1 : 1;
    
        // Format kode_pendaftaran, misalnya A-0001, A-0002, A-0003
        $kode_pendaftaran = 'A-' . str_pad($next_number, 4, '0', STR_PAD_LEFT);
    
        // Masukkan kode_pendaftaran ke data
        $data['kode_pendaftaran'] = $kode_pendaftaran;
    
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('email_pendaftar', 'Email', 'trim|required|valid_email', array('required' => '%s harus diisi', 'valid_email' => 'Format %s tidak valid'));
    
        if ($this->form_validation->run() == FALSE) {
            $ret['status'] = false;
            foreach ($_POST as $key => $value) {
                $ret['error'][$key] = form_error($key);
            }
        } else {
            if ($id) {
                $update = $this->pm->updatePendaftaran($id, $data);
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
                $insert = $this->pm->insertPendaftaran($data);
    
                if ($insert) {
                    $ret = array(
                        'status' => true,
                        'message' => 'Data berhasil disimpan',
                        'kode_pendaftaran' => $kode_pendaftaran  // Kode pendaftaran yang baru
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
    
    

    public function delete_pendaftaran_user(){

        $id = $this->input->post('id');
        $data['deleted_at'] = time();
        $q = $this->pm->updatePendaftaran($id, $data);

        if ($q) {
            $ret['status'] = true;
            $ret['message'] = 'Data berhasil dihapus';
        } else {
            $ret['status'] = false;
            $ret['message'] = 'Data gagal dihapus';
        }

        echo json_encode($ret);
    }

    public function get_detail_pendaftaran_user($id){
        // Mengambil data dari database berdasarkan ID
        $q = $this->pm->getPendaftaranByID($id);
        
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

}
