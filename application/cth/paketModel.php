<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

    // Ambil semua paket yang hanya berupa Haji Reguler, Haji Plus, Umroh Reguler, dan Umroh Plus
    public function get_all_paket(){
        $this->db->where_in('name', array('Haji Reguler', 'Haji Plus', 'Umroh Reguler', 'Umroh Plus'));
        return $this->db->get('paket')->result();
    }
    

    // Ambil paket berdasarkan ID
    public function get_paket_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get('paket')->row();
    }
}
