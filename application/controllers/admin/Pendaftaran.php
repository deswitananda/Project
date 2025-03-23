<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Pendaftaran_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index() {
        check_login();
        check_role('admin');
        $data['content'] = 'admin/pendaftaran';
        $this->load->view('template_admin', $data);
    }


    public function table_pendaftaran_admin()
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

            $row[] = actBtnn($da->id, 'pendaftaran_admin', $da->status);

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

    public function delete_pendaftaran_admin()
    {

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

    public function get_detail_pendaftaran_admin($id){
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

    public function update_status_pendaftaran()
    {
        $id = $this->input->post('id');
        $status = $this->input->post('status');
    
        if ($id && $status) {
            $update = $this->pm->updatePendaftaran($id, ['status' => $status]);
    
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
    
    
    

}
