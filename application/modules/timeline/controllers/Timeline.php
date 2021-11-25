<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timeline extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        cek_level_operator();
        cek_level_manager();
        cek_level_kepala();

        $this->load->model('Timeline_m');
        $this->load->helper('url');
    }

    public function sumpiutang()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['filterupt'] = $this->Timeline_m->filterupt();
        $data['filtermitra'] = $this->Timeline_m->filtermitra();

        $data['sumpiutangPg'] = $this->Timeline_m->sumpiutangPg($config['per_page'], $data['start']);
        $data['sumpiutangPbm'] = $this->Timeline_m->sumpiutangPbm($config['per_page'], $data['start']);
        $data['sumpiutangMe'] = $this->Timeline_m->sumpiutangMe($config['per_page'], $data['start']);
        $data['sumpiutangLt'] = $this->Timeline_m->sumpiutangLt($config['per_page'], $data['start']);
        $data['sumpiutangLlg'] = $this->Timeline_m->sumpiutangLlg($config['per_page'], $data['start']);
        $data['sumpiutangBta'] = $this->Timeline_m->sumpiutangBta($config['per_page'], $data['start']);
        $data['sumpiutangPgp'] = $this->Timeline_m->sumpiutangPgp($config['per_page'], $data['start']);
        $data['sumpiutangTdn'] = $this->Timeline_m->sumpiutangTdn($config['per_page'], $data['start']);
        $data['sumpiutangMet'] = $this->Timeline_m->sumpiutangMet($config['per_page'], $data['start']);
        $data['sumpiutangKb'] = $this->Timeline_m->sumpiutangKb($config['per_page'], $data['start']);
        $data['sumpiutangBdl'] = $this->Timeline_m->sumpiutangBdl($config['per_page'], $data['start']);
        $data['sumpiutangJb'] = $this->Timeline_m->sumpiutangJb($config['per_page'], $data['start']);
        $data['sumpiutangSpn'] = $this->Timeline_m->sumpiutangSpn($config['per_page'], $data['start']);
        $data['sumpiutangMab'] = $this->Timeline_m->sumpiutangMab($config['per_page'], $data['start']);
        $data['sumpiutangBn'] = $this->Timeline_m->sumpiutangBn($config['per_page'], $data['start']);
        $data['sumpiutangCrp'] = $this->Timeline_m->sumpiutangCrp($config['per_page'], $data['start']);

        $this->template->load('template', 'sumpiutangReg_V', $data);
    }

    public function sumpelunasan()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['filterupt'] = $this->Timeline_m->filterupt();
        $data['filtermitra'] = $this->Timeline_m->filtermitra();

        $data['sumpelunasanPg'] = $this->Timeline_m->sumpelunasanPg($config['per_page'], $data['start']);
        $data['sumpelunasanPbm'] = $this->Timeline_m->sumpelunasanPbm($config['per_page'], $data['start']);
        $data['sumpelunasanMe'] = $this->Timeline_m->sumpelunasanMe($config['per_page'], $data['start']);
        $data['sumpelunasanLt'] = $this->Timeline_m->sumpelunasanLt($config['per_page'], $data['start']);
        $data['sumpelunasanLlg'] = $this->Timeline_m->sumpelunasanLlg($config['per_page'], $data['start']);
        $data['sumpelunasanBta'] = $this->Timeline_m->sumpelunasanBta($config['per_page'], $data['start']);
        $data['sumpelunasanPgp'] = $this->Timeline_m->sumpelunasanPgp($config['per_page'], $data['start']);
        $data['sumpelunasanTdn'] = $this->Timeline_m->sumpelunasanTdn($config['per_page'], $data['start']);
        $data['sumpelunasanMet'] = $this->Timeline_m->sumpelunasanMet($config['per_page'], $data['start']);
        $data['sumpelunasanKb'] = $this->Timeline_m->sumpelunasanKb($config['per_page'], $data['start']);
        $data['sumpelunasanBdl'] = $this->Timeline_m->sumpelunasanBdl($config['per_page'], $data['start']);
        $data['sumpelunasanJb'] = $this->Timeline_m->sumpelunasanJb($config['per_page'], $data['start']);
        $data['sumpelunasanSpn'] = $this->Timeline_m->sumpelunasanSpn($config['per_page'], $data['start']);
        $data['sumpelunasanMab'] = $this->Timeline_m->sumpelunasanMab($config['per_page'], $data['start']);
        $data['sumpelunasanBn'] = $this->Timeline_m->sumpelunasanBn($config['per_page'], $data['start']);
        $data['sumpelunasanCrp'] = $this->Timeline_m->sumpelunasanCrp($config['per_page'], $data['start']);

        $this->template->load('template', 'sumpelunasanReg_V', $data);
    }

    public function piutang()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $data['view'] = $this->input->post('view');

        if ($data['view'] == "hari") {

            $data['upt'] = $this->input->post('upt');
            $data['hari'] = $this->Timeline_m->piutangUptToday($data['upt'], $data['keyword']);

            $this->template->load('template', 'piutangHariReg_V', $data);
        } elseif ($data['view'] == "minggu") {

            $data['upt'] = $this->input->post('upt');
            $data['minggu'] = $this->Timeline_m->piutangUptWeek($data['upt'], $data['keyword']);

            $this->template->load('template', 'piutangMingguReg_V', $data);
        } elseif ($data['view'] == "bulan") {

            $data['upt'] = $this->input->post('upt');
            $data['bulan'] = $this->Timeline_m->piutangUptMonth($data['upt'], $data['keyword']);

            $this->template->load('template', 'piutangBulanReg_V', $data);
        }
    }

    public function pelunasan()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['view'] = $this->input->post('view');

        if ($data['view'] == "hari") {

            $data['upt'] = $this->input->post('upt');
            $data['hari'] = $this->Timeline_m->pelunasanUptToday($data['upt']);

            $this->template->load('template', 'pelunasanHariReg_V', $data);
        } elseif ($data['view'] == "minggu") {

            $data['upt'] = $this->input->post('upt');
            $data['minggu'] = $this->Timeline_m->pelunasanUptWeek($data['upt']);

            $this->template->load('template', 'pelunasanMingguReg_V', $data);
        } elseif ($data['view'] == "bulan") {

            $data['upt'] = $this->input->post('upt');
            $data['bulan'] = $this->Timeline_m->pelunasanUptMonth($data['upt']);

            $this->template->load('template', 'pelunasanBulanReg_V', $data);
        }
    }

    public function suminvoice()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['filterupt'] = $this->Timeline_m->filterupt();
        $data['filtermitra'] = $this->Timeline_m->filtermitra();

        $data['suminvoicePg'] = $this->Timeline_m->suminvoicePg($config['per_page'], $data['start']);
        $data['suminvoicePbm'] = $this->Timeline_m->suminvoicePbm($config['per_page'], $data['start']);
        $data['suminvoiceMe'] = $this->Timeline_m->suminvoiceMe($config['per_page'], $data['start']);
        $data['suminvoiceLt'] = $this->Timeline_m->suminvoiceLt($config['per_page'], $data['start']);
        $data['suminvoiceLlg'] = $this->Timeline_m->suminvoiceLlg($config['per_page'], $data['start']);
        $data['suminvoiceBta'] = $this->Timeline_m->suminvoiceBta($config['per_page'], $data['start']);
        $data['suminvoicePgp'] = $this->Timeline_m->suminvoicePgp($config['per_page'], $data['start']);
        $data['suminvoiceTdn'] = $this->Timeline_m->suminvoiceTdn($config['per_page'], $data['start']);
        $data['suminvoiceMet'] = $this->Timeline_m->suminvoiceMet($config['per_page'], $data['start']);
        $data['suminvoiceKb'] = $this->Timeline_m->suminvoiceKb($config['per_page'], $data['start']);
        $data['suminvoiceBdl'] = $this->Timeline_m->suminvoiceBdl($config['per_page'], $data['start']);
        $data['suminvoiceJb'] = $this->Timeline_m->suminvoiceJb($config['per_page'], $data['start']);
        $data['suminvoiceSpn'] = $this->Timeline_m->suminvoiceSpn($config['per_page'], $data['start']);
        $data['suminvoiceMab'] = $this->Timeline_m->suminvoiceMab($config['per_page'], $data['start']);
        $data['suminvoiceBn'] = $this->Timeline_m->suminvoiceBn($config['per_page'], $data['start']);
        $data['suminvoiceCrp'] = $this->Timeline_m->suminvoiceCrp($config['per_page'], $data['start']);

        $data['filterupt'] = $this->Timeline_m->filterupt();

        $this->template->load('template', 'suminvoiceReg_V', $data);
    }

    public function invoice()
    {
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/timeline/index';
        // http://[::1]//posid/piutangprabu/index


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

        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 5;


        $this->pagination->initialize($config);

        $data['start']  = $this->uri->segment(3);

        $data['view'] = $this->input->post('view');

        if ($data['view'] == "hari") {

            $data['upt'] = $this->input->post('upt');
            $data['hari'] = $this->Timeline_m->invoiceUptToday($data['upt']);

            $this->template->load('template', 'invoiceHariReg_V', $data);
        } elseif ($data['view'] == "minggu") {

            $data['upt'] = $this->input->post('upt');
            $data['minggu'] = $this->Timeline_m->invoiceUptWeek($data['upt']);

            $this->template->load('template', 'invoiceMingguReg_V', $data);
        } elseif ($data['view'] == "bulan") {

            $data['upt'] = $this->input->post('upt');
            $data['bulan'] = $this->Timeline_m->invoiceUptMonth($data['upt']);

            $this->template->load('template', 'invoiceBulanReg_V', $data);
        }
    }
}
