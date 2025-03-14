<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_haji extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Produk_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index(){
        $data = array(
			'content' => 'admin/paket_haji',
			'title' => 'Paket Haji'
		);
		$this->load->view('template_admin', $data);
        
    }

    public function table_paket_haji(){
        $q = $this->pm->dataTablesPaketHaji();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = '<input type="checkbox" class="data-check" value="' . $da->id . '">';
            $row[] = $no;
            $row[] = $da->nama_paket;
            $row[] = $da->deskripsi;
            $row[] = $da->harga;
            $row[] = $da->durasi;
            $row[] = $da->tanggal_berangkat;
            $row[] = $da->tanggal_pulang;
            $row[] = $da->fasilitas;
            $row[] = $da->maskapai;
            $row[] = $da->kuota;
            $row[] = $da->status;
            $row[] = actBtnnnn($da->id, 'paket_haji');
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

}
?>