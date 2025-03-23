<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends MY_model{

	protected $tablePendaftaran = 'pendaftaran';


	public function __construct()
	{
		parent::__construct();
	}

    public function dataTablesPendaftaran(){
		$col_order = array($this->tablePendaftaran . '.id');
		$col_search = array($this->tablePendaftaran . '.id');
		$order = array($this->tablePendaftaran. '.id' => 'desc');
		$filter = array($this->tablePendaftaran. '.deleted_at' => 0);
		$group_by = null;
		//$query = $this->tablePendaftaranPaketWisata;
		$this->db->from($this->tablePendaftaran);
		$this->db->select($this->tablePendaftaran . '.*,');
		// $this->db->join($this->tableUser, $this->tableUser . '.id = ' . $this->tablePendaftaran . '.id_user');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order, $filter, $group_by);

		$recordTotal = $this->countAllQueryFiltered($query, $filter);
		$recordFiltered = $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}

	public function getPendaftaranByID($id){
		$this->db->where($this->tablePendaftaran . '.id', $id);
		return $this->db->get($this->tablePendaftaran);
	}

	public function updatePendaftaran($id, $data){
		$this->db->where('id', $id);
		$this->db->update($this->tablePendaftaran, $data);
		return $this->db->affected_rows();
	}

	public function insertPendaftaran($data){
		$this->db->insert($this->tablePendaftaran, $data);
		return $this->db->insert_id();
	}

	
	
}