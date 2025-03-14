<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'akun_user';

    public function __construct()
    {
        parent::__construct();
    }

    // Ambil data user berdasarkan username saja
    public function login($username)
    {
        $this->db->where('username', $username);
        return $this->db->get($this->table);
    }

    // Fungsi register dengan tambahan parameter role
    // Jika role tidak diisi, maka defaultnya 'user'
    public function register($data)
    {
        // Cek apakah email sudah terdaftar
        $this->db->where('email', $data['email']);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return false;
        }
    
        return $this->db->insert($this->table, $data);
    }
    
}
