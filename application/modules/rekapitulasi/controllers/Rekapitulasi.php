<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekapitulasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        cek_level_operator();

        $this->load->model('Rekapitulasi_m');
        $this->load->helper('url');
    }

    function timeline_piutang()
    {
        cek_level_kepala();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/rekapitulasi/index';



        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // end of pagination

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // $data['keyword'] = null;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pel', $data['keyword']);
        $this->db->or_like('tgl', $data['keyword']);
        $this->db->from('dt_piutang');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['row'] = $this->Rekapitulasi_m->piutangPbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'tlPiutang_V', $data);
    }

    function pengakuan_piutang()
    {
        cek_level_manager();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/rekapitulasi/index';


        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // end of pagination

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // $data['keyword'] = null;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pel', $data['keyword']);
        $this->db->or_like('tgl', $data['keyword']);
        $this->db->from('dt_piutang');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);
        $data['row'] = $this->Rekapitulasi_m->piutangPbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'tlPiutangKa_V', $data);
    }

    function timeline_pelunasan()
    {
        cek_level_kepala();
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/rekapitulasi/index';


        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // end of pagination

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // $data['keyword'] = null;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pel', $data['keyword']);
        $this->db->or_like('tgl', $data['keyword']);
        $this->db->from('pelunasan');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['row'] = $this->Rekapitulasi_m->pelunasanPbm($config['per_page'], $data['start'], $data['keyword']);
        $data['tahun'] = $this->Rekapitulasi_m->pelunasanThnPbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'tlPelunasan_V', $data);
    }

    function pengakuan_pelunasan()
    {
        cek_level_manager();

        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/rekapitulasi/index';


        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // end of pagination

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            // $data['keyword'] = null;
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pel', $data['keyword']);
        $this->db->or_like('tgl', $data['keyword']);
        $this->db->from('pelunasan');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['row'] = $this->Rekapitulasi_m->pelunasanPbm($config['per_page'], $data['start'], $data['keyword']);
        $data['tahun'] = $this->Rekapitulasi_m->pelunasanThnPbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'tlPelunasanKa_V', $data);
    }

    function invoice()
    {
        cek_level_operator();
        cek_level_manager();
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/rekapitulasi/index';


        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        // end of pagination

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $this->db->like('nama_pel', $data['keyword']);
        $this->db->or_like('tgl', $data['keyword']);
        $this->db->from('invoice');

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);
        $data['row'] = $this->Rekapitulasi_m->getInvoicePbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'invoice_KaV', $data);
    }

    function laporanfilter()
    {
        cek_level_operator();

        $this->template->load('template', 'laporanfilter_V.php');
    }
}
