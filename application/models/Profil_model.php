<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    public function getUserById($id)
    {
        return $this->db->get_where('akun_user', ['id' => $id])->row();
    }

    public function updateUser($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('akun_user', $data);
    }
}
