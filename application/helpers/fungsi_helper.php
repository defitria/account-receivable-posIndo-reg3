<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('kd_user');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('kd_user');
    if (!$user_session) {
        redirect('auth');
    }
}

function cek_level_operator()
{
    $ci = &get_instance();
    if ($ci->session->userdata('level') == 'Admin Penjualan UPT Pbm') {
        redirect(base_url('notfound'));
    }
}

function cek_level_manager()
{
    $ci = &get_instance();
    if ($ci->session->userdata('level') == 'Manager Penjualan UPT Pbm') {
        redirect(base_url('notfound'));
    }
}

function cek_level_kepala()
{
    $ci = &get_instance();
    if ($ci->session->userdata('level') == 'Ka UPT Pbm') {
        redirect(base_url('notfound'));
    }
}

if (!function_exists('cek_akses')) {
    function cek_akses()
    {
        $ci = get_instance();
        $cek = $ci->db->select('*')->from('akses a')
            ->join('menu m', 'm.kode_menu = a.kode_menu', 'left')
            ->where(['a.level_user' => $ci->session->userdata('level'), 'm.url' => $ci->uri->segment(2, 0)])->get()->row_array();

        if (!$cek) {
            redirect(base_url('datanone'));
        } else {
            if ($cek['akses'] != 1) {
                redirect(base_url('datanone'));
            } else {
                return $cek;
            }
        }
    }

    // if (!function_exists('cek_akses_operator')) {
    //     function cek_akses_operator()
    //     {
    //         $ci = get_instance();
    //         $cek = $ci->db->select('*')->from('akses a')
    //             ->join('menu m', 'm.kode_menu = a.kode_menu', 'left')
    //             ->where(['a.level_user' => 'Admin Penjualan UPT Pbm', 'm.url' => $ci->uri->segment(2, 0) . $ci->uri->slash_segment(2, 'leading')])->get()->row_array();

    //         if (!$cek) {
    //             redirect(base_url('notfound'));
    //         } else {
    //             if ($cek['akses'] != 1) {
    //                 redirect(base_url('notfound'));
    //             } else {
    //                 return $cek;
    //             }
    //         }
    //     }
    // }
}
