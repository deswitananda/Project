<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

	protected $table = 'akun_user';


	public function __construct()
	{
		parent::__construct();
	}

	public function login($email, $password)
	{

		$q = $this->db->where('email', $email)->where('password', $password)->get($this->table);
		return $q;
	}

	public function getUserAll(){
		$q = $this->db->get($this->table);
		return $q->result();
	}
}