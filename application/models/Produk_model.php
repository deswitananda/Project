<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends MY_model
{

	protected $tablePaketHaji = 'paket_haji';
	protected $tableKategoriPaketHaji = 'kategori';
	protected $tablePersyaratanPaketHaji = 'persyaratan';
	protected $tableSyaratPaketHaji = 'syarat';
	protected $tablePaketUmroh = 'paket_umroh';
	protected $tableKategoriPaketUmroh = 'kategori_paket_umroh';
	protected $tablePaketWisata = 'paket_wisata';
	protected $tableKategoriPaketWisata = 'kategori_paket_wisata';


	public function __construct()
	{
		parent::__construct();
	}


	//TABLE PAKET HAJI--------------------------------------------------------------------
    public function dataTablesPaketHaji(){
		$col_order 	= array($this->tablePaketHaji . '.id', $this->tablePaketHaji . '.nama_paket');
		$col_search = array($this->tablePaketHaji . '.id', $this->tablePaketHaji . '.nama_paket' , $this->tableKategoriPaketHaji . '.nama_kategori');
		$order 		= array($this->tablePaketHaji . '.id' => 'desc');
		$filter 	= array($this->tablePaketHaji . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePaketHaji;
		$this->db->from($this->tablePaketHaji);
		$this->db->select($this->tablePaketHaji . '.*,'. $this->tableKategoriPaketHaji . '.nama_kategori');
		$this->db->join($this->tableKategoriPaketHaji, $this->tableKategoriPaketHaji . '.id = ' . $this->tablePaketHaji . '.id_kategori');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getPaketHajiByID($id){
		$this->db->where($this->tablePaketHaji . '.id', $id);
		return $this->db->get($this->tablePaketHaji);
	}

	public function updatePaketHaji($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tablePaketHaji, $data);
		return $this->db->affected_rows();
	}

	public function insertPaketHaji($data){
		$this->db->insert($this->tablePaketHaji, $data);
		return $this->db->insert_id();
	}


	//KATEGORI PAKET Haji------------------------------------------------------
	public function dataTablesKategoriPaketHaji(){
		$col_order 	= array($this->tableKategoriPaketHaji . '.id', $this->tableKategoriPaketHaji . '.nama_kategori');
		$col_search = array($this->tableKategoriPaketHaji . '.id', $this->tableKategoriPaketHaji . '.nama_kategori');
		$order 		= array($this->tableKategoriPaketHaji . '.id' => 'desc');
		$filter 	= array($this->tableKategoriPaketHaji . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tableKategoriPaketHaji;
		$this->db->from($this->tableKategoriPaketHaji);
		$this->db->select($this->tableKategoriPaketHaji . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getAllKategoriHajiNotDeleted(){

		$this->db->where('deleted_at', 0);
		return  $this->db->get($this->tableKategoriPaketHaji);
	}

	public function getKategoriHajiByID($id){
		$this->db->where($this->tableKategoriPaketHaji . '.id', $id);
		return $this->db->get($this->tableKategoriPaketHaji);
	}

	public function updateKategoriHaji($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tableKategoriPaketHaji, $data);
		return $this->db->affected_rows();
	}

	public function insertKategoriHaji($data){
		$this->db->insert($this->tableKategoriPaketHaji, $data);
		return $this->db->insert_id();
	}




	//PERSYARATAN PAKET HAJI------------------------------------------------------
	public function dataTablesPersyaratanPaketHaji(){
		$col_order 	= array($this->tablePersyaratanPaketHaji . '.id', $this->tablePersyaratanPaketHaji . '.nama_persyaratan_paket_haji');
		$col_search = array($this->tablePersyaratanPaketHaji . '.id', $this->tablePersyaratanPaketHaji . '.nama_persyaratan_paket_haji');
		$order 		= array($this->tablePersyaratanPaketHaji . '.id' => 'desc');
		$filter 	= array($this->tablePersyaratanPaketHaji . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePersyaratanPaketHaji;
		$this->db->from($this->tablePersyaratanPaketHaji);
		$this->db->select($this->tablePersyaratanPaketHaji . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getPersyaratanByID($id){
		$this->db->where($this->tablePersyaratanPaketHaji . '.id', $id);
		return $this->db->get($this->tablePersyaratanPaketHaji);
	}

	public function updatePersyaratan($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tablePersyaratanPaketHaji, $data);
		return $this->db->affected_rows();
	}

	public function insertPersyaratan($data){
		$this->db->insert($this->tablePersyaratanPaketHaji, $data);
		return $this->db->insert_id();
	}



	//SYARAT PAKET HAJI------------------------------------------------------
	public function dataTablesSyaratPaketHaji(){
		$col_order 	= array($this->tableSyaratPaketHaji . '.id', $this->tableSyaratPaketHaji . '.nama_syarat');
		$col_search = array($this->tableSyaratPaketHaji . '.id', $this->tableSyaratPaketHaji . '.nama_syarat');
		$order 		= array($this->tableSyaratPaketHaji . '.id' => 'desc');
		$filter 	= array($this->tableSyaratPaketHaji . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tableSyaratPaketHaji;
		$this->db->from($this->tableSyaratPaketHaji);
		$this->db->select($this->tableSyaratPaketHaji . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getSyaratByID($id){
		$this->db->where($this->tableSyaratPaketHaji . '.id', $id);
		return $this->db->get($this->tableSyaratPaketHaji);
	}

	public function updateSyarat($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tableSyaratPaketHaji, $data);
		return $this->db->affected_rows();
	}

	public function insertSyarat($data){
		$this->db->insert($this->tableSyaratPaketHaji, $data);
		return $this->db->insert_id();
	}



	//TABLE PAKET UMROH--------------------------------------------------------------------
    public function dataTablesPaketUmroh(){
		$col_order 	= array($this->tablePaketUmroh . '.id', $this->tablePaketUmroh . '.nama_paket');
		$col_search = array($this->tablePaketUmroh . '.id', $this->tablePaketUmroh . '.nama_paket' , $this->tableKategoriPaketUmroh . '.nama_kategori');
		$order 		= array($this->tablePaketUmroh . '.id' => 'desc');
		$filter 	= array($this->tablePaketUmroh . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePaketUmroh;
		$this->db->from($this->tablePaketUmroh);
		$this->db->select($this->tablePaketUmroh . '.*,'. $this->tableKategoriPaketUmroh . '.nama_kategori');
		$this->db->join($this->tableKategoriPaketUmroh, $this->tableKategoriPaketUmroh . '.id = ' . $this->tablePaketUmroh . '.id_kategori');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getPaketUmrohByID($id){
		$this->db->where($this->tablePaketUmroh . '.id', $id);
		return $this->db->get($this->tablePaketUmroh);
	}

	public function updatePaketUmroh($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tablePaketUmroh, $data);
		return $this->db->affected_rows();
	}

	public function insertPaketUmroh($data){
		$this->db->insert($this->tablePaketUmroh, $data);
		return $this->db->insert_id();
	}


	//KATEGORI PAKET UMROH------------------------------------------------------
	public function dataTablesKategoriPaketUmroh(){
		$col_order 	= array($this->tableKategoriPaketUmroh . '.id', $this->tableKategoriPaketUmroh . '.nama_kategori');
		$col_search = array($this->tableKategoriPaketUmroh . '.id', $this->tableKategoriPaketUmroh . '.nama_kategori');
		$order 		= array($this->tableKategoriPaketUmroh . '.id' => 'desc');
		$filter 	= array($this->tableKategoriPaketUmroh . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tableKategoriPaketUmroh;
		$this->db->from($this->tableKategoriPaketUmroh);
		$this->db->select($this->tableKategoriPaketUmroh . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getAllKategoriUmrohNotDeleted(){

		$this->db->where('deleted_at', 0);
		return  $this->db->get($this->tableKategoriPaketUmroh);
	}

	public function getKategoriUmrohByID($id){
		$this->db->where($this->tableKategoriPaketUmroh . '.id', $id);
		return $this->db->get($this->tableKategoriPaketUmroh);
	}

	public function updateKategoriUmroh($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tableKategoriPaketUmroh, $data);
		return $this->db->affected_rows();
	}

	public function insertKategoriUmroh($data){
		$this->db->insert($this->tableKategoriPaketUmroh, $data);
		return $this->db->insert_id();
	}

	//TABLE PAKET Wisata--------------------------------------------------------------------
    public function dataTablesPaketWisata(){
		$col_order 	= array($this->tablePaketWisata . '.id', $this->tablePaketWisata . '.nama_paket');
		$col_search = array($this->tablePaketWisata . '.id', $this->tablePaketWisata . '.nama_paket' , $this->tableKategoriPaketWisata . '.nama_kategori');
		$order 		= array($this->tablePaketWisata . '.id' => 'desc');
		$filter 	= array($this->tablePaketWisata . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePaketWisata;
		$this->db->from($this->tablePaketWisata);
		$this->db->select($this->tablePaketWisata . '.*,'. $this->tableKategoriPaketWisata . '.nama_kategori');
		$this->db->join($this->tableKategoriPaketWisata, $this->tableKategoriPaketWisata . '.id = ' . $this->tablePaketWisata . '.id_kategori');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getPaketWisataByID($id){
		$this->db->where($this->tablePaketWisata . '.id', $id);
		return $this->db->get($this->tablePaketWisata);
	}

	public function updatePaketWisata($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tablePaketWisata, $data);
		return $this->db->affected_rows();
	}

	public function insertPaketWisata($data){
		$this->db->insert($this->tablePaketWisata, $data);
		return $this->db->insert_id();
	}


	//KATEGORI PAKET Wisata------------------------------------------------------
	public function dataTablesKategoriPaketWisata(){
		$col_order 	= array($this->tableKategoriPaketWisata . '.id', $this->tableKategoriPaketWisata . '.nama_kategori');
		$col_search = array($this->tableKategoriPaketWisata . '.id', $this->tableKategoriPaketWisata . '.nama_kategori');
		$order 		= array($this->tableKategoriPaketWisata . '.id' => 'desc');
		$filter 	= array($this->tableKategoriPaketWisata . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tableKategoriPaketWisata;
		$this->db->from($this->tableKategoriPaketWisata);
		$this->db->select($this->tableKategoriPaketWisata . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getAllKategoriWisataNotDeleted(){

		$this->db->where('deleted_at', 0);
		return  $this->db->get($this->tableKategoriPaketWisata);
	}

	public function getKategoriWisataByID($id){
		$this->db->where($this->tableKategoriPaketWisata . '.id', $id);
		return $this->db->get($this->tableKategoriPaketWisata);
	}

	public function updateKategoriWisata($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tableKategoriPaketWisata, $data);
		return $this->db->affected_rows();
	}

	public function insertKategoriWisata($data){
		$this->db->insert($this->tableKategoriPaketWisata, $data);
		return $this->db->insert_id();
	}	

}


