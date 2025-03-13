<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends MY_model
{

	protected $tablePaketHaji = 'paket_haji';
	protected $tablePaketUmroh = 'paket_umroh';
	protected $tablePaketWisata = 'paket_wisata';


	public function __construct()
	{
		parent::__construct();
	}

    public function dataTablesPaketHaji(){
		$col_order 	= array($this->tablePaketHaji . '.id', $this->tablePaketHaji . '.nama_paket');
		$col_search = array($this->tablePaketHaji . '.id', $this->tablePaketHaji . '.nama_paket');
		$order 		= array($this->tablePaketHaji . '.id' => 'desc');
		$filter 	= array($this->tablePaketHaji . '.deleted_at' => 0);
		$group_by 	= null;
		//$query = $this->tablePaketHaji;
		$this->db->from($this->tablePaketHaji);
		$this->db->select($this->tablePaketHaji . '.*');
		$query = substr($this->db->get_compiled_select(), 6);
		$data = $this->get_datatables($query, $col_order, $col_search, $order,  $filter, $group_by);

		$recordTotal =  $this->countAllQueryFiltered($query, $filter);
		$recordFiltered =  $this->count_filtered($query, $filter);
		return array('data' => $data, 'recordTotal' => $recordTotal, 'recordFiltered' => $recordFiltered);
	}
}