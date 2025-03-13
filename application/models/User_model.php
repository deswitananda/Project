<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'akun_user';

    public function __construct()
    {
        parent::__construct();
    }

    // Fungsi login dengan verifikasi password menggunakan username
    // public function login($username, $password)
    // {
    //     // Cari user berdasarkan username
    //     $this->db->where('username', $username);
    //     $query = $this->db->get($this->table);

    //     if ($query->num_rows() == 1) {
    //         $user = $query->row();
    //         // Verifikasi password yang di-hash
    //         if (password_verify($password, $user->password)) {
    //             return $query;
    //         }
    //     }
    //     return false;
    // }

    public function login($username, $password)
	{

		$q = $this->db->where('username', $username)->where('password', $password)->get($this->table);
		return $q;
	}

    public function getUserAll(){
        $q = $this->db->get($this->table);
        return $q->result();
    }

    // Fungsi register: cek apakah email sudah ada, hash password, lalu insert data user baru
    public function register($username, $email, $password)
    {
        // Cek apakah email sudah terdaftar
        $this->db->where('email', $email);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            // Email sudah ada, registrasi gagal
            return false;
        }

        // Hash password menggunakan password_hash
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'username' => $username,
            'email'    => $email,
            'password' => $hashed_password
        ];

        return $this->db->insert($this->table, $data);
    }
}
