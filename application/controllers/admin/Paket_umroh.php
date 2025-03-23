<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_umroh extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Produk_model', 'pm');
        $this->load->helper('actionbtn');
    }

    public function index(){
        $data = array(
			'content' => 'admin/paket_umroh',
			'title' => 'Paket Umroh'
		);
		$this->load->view('template_admin', $data);
        
    }


    //Paket Umroh
    public function table_paket_umroh(){
        $q = $this->pm->dataTablesPaketUmroh();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $da->nama_kategori;
            $row[] = $da->nama_paket;
            $row[] = $da->harga;
            $row[] = $da->durasi;
            $row[] = $da->tanggal_berangkat;
            $row[] = $da->tanggal_pulang;
            $row[] = $da->kuota;
            $row[] = $da->status;
            $row[] = actBtnnnn($da->id, 'paket_umroh');
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

    public function option_kategori(){
		$q = $this->pm->getAllKategoriNotDeleted();
		$ret = '<option value="">Pilih</option>';
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$ret .= '<option value="' . $row->id . '">' . $row->nama_kategori . '</option>';
			}
		}
		echo $ret;
	}

    public function edit_paket_umroh()
	{

		$id = $this->input->post('id');
		$q = $this->pm->getPaketUmrohByID($id);

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

    public function save_paket_umroh(){

		$id = $this->input->post('id');
		$data['id_kategori'] = $this->input->post('id_kategori');
		$data['nama_paket'] = $this->input->post('nama_paket');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['harga'] = $this->input->post('harga');
		$data['durasi'] = $this->input->post('durasi');
		$data['tanggal_berangkat'] = $this->input->post('tanggal_berangkat');
		$data['tanggal_pulang'] = $this->input->post('tanggal_pulang');
		$data['fasilitas'] = $this->input->post('fasilitas');
		$data['maskapai'] = $this->input->post('maskapai');
		$data['kuota'] = $this->input->post('kuota');
		$data['status'] = $this->input->post('status');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = 0;

		$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('durasi', 'Durasi', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('tanggal_berangkat', 'Tanggal Berangkat', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('tanggal_pulang', 'Tanggal_Pulang', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('fasilitas', 'Fasilitas', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('maskapai', 'Maskapai', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('kuota', 'Kuota', 'trim|required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('status', 'Status', 'trim|required', array('required' => '%s harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$ret['status'] = false;
			foreach ($_POST as $key => $value) {
				$ret['error'][$key] = form_error($key);
			}
		} else {
            if ($id) {
                $update = $this->pm->updatePaketUmroh($id, $data);
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
                $insert = $this->pm->insertPaketUmroh($data);

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


    public function delete_paket_umroh(){

		$id = $this->input->post('id');
		$data['deleted_at'] = time();
		$q = $this->pm->updatePaketUmroh($id, $data);

		if ($q) {
			$ret['status'] = true;
			$ret['message'] = 'Data berhasil dihapus';
		} else {
			$ret['status'] = false;
			$ret['message'] = 'Data gagal dihapus';
		}

		echo json_encode($ret);
	}

    public function get_detail_paket_umroh($id){
        // Mengambil data dari database berdasarkan ID
        $q = $this->pm->getPaketUmrohByID($id);
        
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


    //KATEGORI Paket Umroh
    // public function table_kategori(){
    //     $q = $this->pm->dataTablesKategoriPaketUmroh();
    
    //     $data  = array();
    //     $no    = isset($_POST['start']) ? $_POST['start'] : 0;
    //     foreach ($q['data'] as $da) {
    //         $no++;
    //         $row   = array();
    //         $row[] = $no;
    //         $row[] = $da->nama_kategori;
    //         $row[] = actBtn($da->id, 'kategori');
    //         $data[] = $row;
    //     }
    
    //     $output = array(
    //         "draw" => isset($_POST['draw']) ? $_POST['draw'] : 1,
    //         "recordsTotal" => $q['recordTotal'],
    //         "recordsFiltered" => $q['recordFiltered'],
    //         "data" => $data,
    //     );
    
    //     echo json_encode($output);
    // }

    // public function edit_kategori()
	// {

	// 	$id = $this->input->post('id');
	// 	$q = $this->pm->getKategoriUmrohByID($id);

	// 	if ($q->num_rows() > 0) {
	// 		$ret = array(
	// 			'status' => true,
	// 			'data' => $q->row(),
	// 			'message' => '',
	// 		);
	// 	} else {
	// 		$ret = array(
	// 			'status' => false,
	// 			'data' => [],
	// 			'message' => 'Data tidak ditemukan',
	// 			'query' => $this->db->last_query()
	// 		);
	// 	}

	// 	echo json_encode($ret);
	// }

    // public function save_kategori(){

	// 	$id = $this->input->post('id');
	// 	$data['nama_kategori'] = $this->input->post('nama_kategori');
	// 	$data['updated_at'] = date('Y-m-d H:i:s');
	// 	$data['deleted_at'] = 0;

	// 	$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required', array('required' => '%s harus diisi'));


	// 	if ($this->form_validation->run() == FALSE) {
	// 		$ret['status'] = false;
	// 		foreach ($_POST as $key => $value) {
	// 			$ret['error'][$key] = form_error($key);
	// 		}
	// 	} else {
    //         if ($id) {
    //             $update = $this->pm->updateKategoriUmroh($id, $data);
    //             if ($update) {
    //                 $ret = array(
    //                     'status' => true,
    //                     'message' => 'Data berhasil diupdate'
    //                 );
    //             } else {
    //                 $ret = array(
    //                     'status' => false,
    //                     'message' => 'Data gagal diupdate'
    //                 );
    //             }
    //         } else {
    //             $data['created_at'] = date('Y-m-d H:i:s');
    //             $insert = $this->pm->insertKategoriUmroh($data);

    //             if ($insert) {
    //                 $ret = array(
    //                     'status' => true,
    //                     'message' => 'Data berhasil disimpan'
    //                 );
    //             } else {
    //                 $ret = array(
    //                     'status' => false,
    //                     'message' => 'Data gagal disimpan'
    //                 );
    //             }
	// 	    }
	//     }
    //     echo json_encode($ret);
    // }

    // public function delete_kategori(){

	// 	$id = $this->input->post('id');
	// 	$data['deleted_at'] = time();
	// 	$q = $this->pm->updateKategoriUmroh($id, $data);

	// 	if ($q) {
	// 		$ret['status'] = true;
	// 		$ret['message'] = 'Data berhasil dihapus';
	// 	} else {
	// 		$ret['status'] = false;
	// 		$ret['message'] = 'Data gagal dihapus';
	// 	}

	// 	echo json_encode($ret);
	// }



    //PERSYARATAN Paket Umroh
    public function table_persyaratan(){
        $q = $this->pm->dataTablesPersyaratanPaketHaji();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $da->nama_persyaratan_paket_haji;
            $row[] = actBtn($da->id, 'persyaratan');
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

    public function edit_persyaratan(){

		$id = $this->input->post('id');
		$q = $this->pm->getPersyaratanByID($id);

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

    public function save_persyaratan(){

		$id = $this->input->post('id');
		$data['nama_persyaratan_paket_haji'] = $this->input->post('nama_persyaratan_paket_haji');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = 0;

		$this->form_validation->set_rules('nama_persyaratan_paket_haji', 'Nama ', 'trim|required', array('required' => '%s harus diisi'));


		if ($this->form_validation->run() == FALSE) {
			$ret['status'] = false;
			foreach ($_POST as $key => $value) {
				$ret['error'][$key] = form_error($key);
			}
		} else {
            if ($id) {
                $update = $this->pm->updatePersyaratan($id, $data);
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
                $insert = $this->pm->insertPersyaratan($data);

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

    public function delete_persyaratan(){

		$id = $this->input->post('id');
		$data['deleted_at'] = time();
		$q = $this->pm->updatePersyaratan($id, $data);

		if ($q) {
			$ret['status'] = true;
			$ret['message'] = 'Data berhasil dihapus';
		} else {
			$ret['status'] = false;
			$ret['message'] = 'Data gagal dihapus';
		}

		echo json_encode($ret);
	}


    public function table_syarat(){
        $q = $this->pm->dataTablesSyaratPaketHaji();
    
        $data  = array();
        $no    = isset($_POST['start']) ? $_POST['start'] : 0;
        foreach ($q['data'] as $da) {
            $no++;
            $row   = array();
            $row[] = $no;
            $row[] = $da->nama_syarat;
            $row[] = actBtn($da->id, 'syarat');
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

    public function edit_syarat(){

		$id = $this->input->post('id');
		$q = $this->pm->getSyaratByID($id);

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

    public function save_syarat(){

		$id = $this->input->post('id');
		$data['nama_syarat'] = $this->input->post('nama_syarat');
		$data['updated_at'] = date('Y-m-d H:i:s');
		$data['deleted_at'] = 0;

		$this->form_validation->set_rules('nama_syarat', 'Nama ', 'trim|required', array('required' => '%s harus diisi'));


		if ($this->form_validation->run() == FALSE) {
			$ret['status'] = false;
			foreach ($_POST as $key => $value) {
				$ret['error'][$key] = form_error($key);
			}
		} else {
            if ($id) {
                $update = $this->pm->updateSyarat($id, $data);
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
                $insert = $this->pm->insertSyarat($data);

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

    public function delete_syarat(){

		$id = $this->input->post('id');
		$data['deleted_at'] = time();
		$q = $this->pm->updateSyarat($id, $data);

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
