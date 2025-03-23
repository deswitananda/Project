<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function check_login() {
    $CI =& get_instance();
    if (!$CI->session->userdata('is_login')) {
        redirect('login');
        exit;
    }
}

function check_role($role_required) {
    $CI =& get_instance();
    $user_role = $CI->session->userdata('role');

    if (!$CI->session->userdata('is_login') || $user_role !== $role_required) {
        redirect('login'); // Jika tidak sesuai, kembalikan ke login
        exit;
    }
}
