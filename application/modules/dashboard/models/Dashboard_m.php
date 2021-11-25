<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{
    // public function main_menu()
    // {
    //     $main_menu = $this->db->select('m.*, a.akses')
    //         ->from('menu m')
    //         ->join('akses a', 'a.kode_menu = m.kode_menu', 'left')
    //         ->where(['a.level_user' => $this->session->level, 'm.aktif' => '1', 'level' => 'main_menu'])
    //         ->order_by('m.no_urut', 'ASC')
    //         ->get()->result_array();

    //     return $main_menu;
    // }

    // public function sub_menu()
    // {
    //     $sub_menu = $this->db->select('m.*, a.akses')
    //         ->from('menu m')
    //         ->join('akses a', 'a.kode_menu = m.kode_menu', 'left')
    //         ->where(['a.level_user' => $this->session->level, 'm.aktif' => '1', 'level' => 'sub_menu'])
    //         ->get()->result_array();

    //     return $sub_menu;
    // }
}
