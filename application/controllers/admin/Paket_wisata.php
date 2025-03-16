<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_wisata extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Produk_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index(){
        $data = array(
			'content' => 'admin/paket_wisata',
			'title' => 'Paket Wisata'
		);
		$this->load->view('template_admin', $data);
        
    }

    public function option_kategori(){
		$q = $this->pm->getAllKategoriWisataNotDeleted();
		$ret = '<option value="">Pilih</option>';
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$ret .= '<option value="' . $row->id . '">' . $row->nama_kategori . '</option>';
			}
		}
		echo $ret;
	}


    //Paket Wisata
    public function table_paket_wisata(){
        $q = $this->pm->dataTablesPaketWisata();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $da->nama_kategori;
            $row[] = $da->nama_paket;
            $row[] = $da->harga;
            $row[] = $da->tujuan;
            $row[] = $da->fasilitas;
            $row[] = $da->tanggal;
            $row[] = $da->status;
            $row[] = actBtn($da->id, 'paket_wisata');
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

    public function edit_paket_wisata()
	{

		$id = $this->input->post('id');
		$q = $this->pm->getPaketWisataByID($id);

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

    public function save_paket_wisata(){

		$id = $this->input->post('id');
		$data['id_kategori'] = $this->input->post('id_kategori');
		$data['nama_paket'] = $this->input->post('nama_paket');
		$data['harga'] = $this->input->post('harga');
		$data['tanggal'] = $this->input->post('');
		$data['fasilitas'] = $this->input->post('fasilitas');
		$data['tujuan'] = $this->input->post('tujuan');
		$data['status'] = $this->input->post('status');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = 0;

		$this->form_validation->set_rules('id_kategori', 'Kategori', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('tanggal', 'Tanggal Berangkat', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('status', 'Status', 'trim|required', array('required' => '%s harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$ret['status'] = false;
			foreach ($_POST as $key => $value) {
				$ret['error'][$key] = form_error($key);
			}
		} else {
            if ($id) {
                $update = $this->pm->updatePaketWisata($id, $data);
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
                $insert = $this->pm->insertPaketWisata($data);

                if ($insert) {
                    $ret = array(
                        'status' => true,
                        'message' => 'Data berhasil disimpan'
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


    public function delete_paket_wisata(){

		$id = $this->input->post('id');
		$data['deleted_at'] = time();
		$q = $this->pm->updatePaketWisata($id, $data);

		if ($q) {
			$ret['status'] = true;
			$ret['message'] = 'Data berhasil dihapus';
		} else {
			$ret['status'] = false;
			$ret['message'] = 'Data gagal dihapus';
		}

		echo json_encode($ret);
	}



    //KATEGORI Paket Wisata
    public function table_kategori(){
        $q = $this->pm->dataTablesKategoriPaketWisata();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $da->nama_kategori;
            $row[] = actBtn($da->id, 'kategori');
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

    public function edit_kategori()
	{

		$id = $this->input->post('id');
		$q = $this->pm->getKategoriWisataByID($id);

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

    public function save_kategori(){

		$id = $this->input->post('id');
		$data['nama_kategori'] = $this->input->post('nama_kategori');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = 0;

		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required', array('required' => '%s harus diisi'));


		if ($this->form_validation->run() == FALSE) {
			$ret['status'] = false;
			foreach ($_POST as $key => $value) {
				$ret['error'][$key] = form_error($key);
			}
		} else {
            if ($id) {
                $update = $this->pm->updateKategoriWisata($id, $data);
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
                $insert = $this->pm->insertKategoriWisata($data);

                if ($insert) {
                    $ret = array(
                        'status' => true,
                        'message' => 'Data berhasil disimpan'
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

    public function delete_kategori(){

		$id = $this->input->post('id');
		$data['deleted_at'] = time();
		$q = $this->pm->updateKategoriWisata($id, $data);

		if ($q) {
			$ret['status'] = true;
			$ret['message'] = 'Data berhasil dihapus';
		} else {
			$ret['status'] = false;
			$ret['message'] = 'Data gagal dihapus';
		}

		echo json_encode($ret);
	}



}
