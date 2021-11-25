<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PiutangPrabu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        cek_level_kepala();

        $this->load->model('PiutangPrabu_m');
        $this->load->helper('url');
    }

    public function index()
    {
        cek_level_manager();
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/piutangprabu/index';
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
        $data['row'] = $this->PiutangPrabu_m->getPiutangPbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'piutang_uptprabuV', $data);
    }

    public function input()
    {
        cek_level_manager();
        $data['mitraPbm'] = $this->PiutangPrabu_m->mitraPbm();
        $data['bisnisPbm'] = $this->PiutangPrabu_m->bisnisPbm();
        $this->template->load('template', 'piutang_addV', $data);
    }

    function input_act()
    {
        cek_level_manager();
        $bisnis = $this->input->post('bisnis');
        $nama_pel = $this->input->post('nama_pel');
        $prod = $this->input->post('prod');
        $bsu = $this->input->post('bsu');

        $total_piutang = $this->input->post('total_piutang');

        $data = array(
            'id' => "",
            'nama_upt' => "Prabumulih",
            'bisnis' => "$bisnis",
            'nama_pel' => "$nama_pel",
            'prod' => "$prod",
            'bsu' => "$bsu",
            'total_piutang' => "$total_piutang",
            'pajak' => "",
            // 'saldo_akhir' => "",
            // 'sebulan' => "",
            // 'duabulan' => "",
            // 'tigabulan' => ""
        );

        $this->db->set('tgl', 'NOW()', FALSE);
        $this->PiutangPrabu_m->input_data($data, 'dt_piutang');
        redirect('piutangprabu');
    }

    function invoice()
    {
        cek_level_operator();
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/piutangprabu/index';
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
        $data['row'] = $this->PiutangPrabu_m->getInvoicePbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'invoiceV', $data);
    }


    function add_invoice()
    {
        cek_level_operator();
        $data['mitraPbm'] = $this->PiutangPrabu_m->mitraPbm();
        $this->template->load('template', 'invoice_addV', $data);
    }


    public function save_invoice()
    {
        cek_level_operator();
        // if ($this->input->post('simpan')) {
        $nomor = $this->input->post('nomor');
        $perihal = $this->input->post('perihal');
        $lampiran = $this->input->post('lampiran');
        $nama_pel = $this->input->post('nama_pel');

        $data = array(
            'id' => "",
            'nama_upt' => "Prabumulih",
            'nomor' => "$nomor",
            'perihal' => "$perihal",
            'lampiran' => "$lampiran",
            'nama_pel' => "$nama_pel"
        );

        $this->db->set('tgl', 'NOW()', FALSE);
        $this->PiutangPrabu_m->input_invoice($data, 'invoice');

        $nama_upt = "Prabumulih";
        $nomor = $this->input->post('nomor');
        $nama_pel = $this->input->post('nama_pel');
        $pelunasan = "0";
        $deposit = "0";
        // $pelunasan_bln = "";
        $tgl_setor = "";
        $status = 0;

        $data = array(
            'id_pelunasan' => "",
            'nama_upt' => "$nama_upt",
            'nomor' => "$nomor",
            'nama_pel' => "$nama_pel",
            'pelunasan' => "$pelunasan",
            'deposit' => "$deposit",
            // 'pelunasan_bln' => "$pelunasan_bln",
            'tgl_setor' => "$tgl_setor",
            'status' => "$status",
        );

        $this->db->set('tgl', 'NOW()', FALSE);
        $this->PiutangPrabu_m->input_pel($data, 'pelunasan');


        redirect('piutangprabu/invoice');
        // }
    }

    function filter_invoice()
    {
        cek_level_operator();
        // Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/piutangprabu/index';
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
        $data['tahun'] = $this->PiutangPrabu_m->gettahun();
        $data['row'] = $this->PiutangPrabu_m->getInvoicePbm($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'invoice_filterV', $data);
    }

    function print_invoice()
    {
        cek_level_operator();
        $data['tahun1'] = $this->input->post('tahun1');
        $data['bulanawal'] = $this->input->post('bulanawal');
        $data['bulanakhir'] = $this->input->post('bulanakhir');
        $data['nama_pel'] = $this->input->post('nama_pel');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 2) {

            $nama_upt = $this->input->post('nama_upt');

            $data['datasurat'] = $this->PiutangPrabu_m->filtersurat($data['nama_pel'], $nama_upt, $data['tahun1'], $data['bulanawal'], $data['bulanakhir']);

            $data['datapaket'] = $this->PiutangPrabu_m->filterpaket($data['nama_pel'], $nama_upt, $data['tahun1'], $data['bulanawal'], $data['bulanakhir']);

            $data['datainlogistik'] = $this->PiutangPrabu_m->filterinlogistik($data['nama_pel'], $nama_upt, $data['tahun1'], $data['bulanawal'], $data['bulanakhir']);

            $data['datakargopos'] = $this->PiutangPrabu_m->filterkargopos($data['nama_pel'], $nama_upt, $data['tahun1'], $data['bulanawal'], $data['bulanakhir']);

            $data['datasum'] = $this->PiutangPrabu_m->sum($data['nama_pel'], $nama_upt, $data['tahun1'], $data['bulanawal'], $data['bulanakhir']);

            $data['datainvoice'] = $this->PiutangPrabu_m->filterinvoice($data['nama_pel'], $nama_upt);

            $data['piutangBln2'] = $this->PiutangPrabu_m->piutangBln2($data['nama_pel'], $nama_upt);
            $data['pelunasanBln2'] = $this->PiutangPrabu_m->pelunasanBln2($data['nama_pel'], $nama_upt);

            $data['piutangBln3'] = $this->PiutangPrabu_m->piutangBln3($data['nama_pel'], $nama_upt);
            $data['pelunasanBln3'] = $this->PiutangPrabu_m->pelunasanBln3($data['nama_pel'], $nama_upt);

            $data['piutangBln4'] = $this->PiutangPrabu_m->piutangBln4($data['nama_pel'], $nama_upt);
            $data['pelunasanBln4'] = $this->PiutangPrabu_m->pelunasanBln4($data['nama_pel'], $nama_upt);

            $data['piutangBln5'] = $this->PiutangPrabu_m->piutangBln5($data['nama_pel'], $nama_upt);
            $data['pelunasanBln5'] = $this->PiutangPrabu_m->pelunasanBln5($data['nama_pel'], $nama_upt);

            $data['piutangBln6'] = $this->PiutangPrabu_m->piutangBln6($data['nama_pel'], $nama_upt);
            $data['pelunasanBln6'] = $this->PiutangPrabu_m->pelunasanBln6($data['nama_pel'], $nama_upt);

            $data['piutangBln7'] = $this->PiutangPrabu_m->piutangBln7($data['nama_pel'], $nama_upt);
            $data['pelunasanBln7'] = $this->PiutangPrabu_m->pelunasanBln7($data['nama_pel'], $nama_upt);

            $data['pelunasan'] = $this->PiutangPrabu_m->pelunasan($data['nama_pel'], $nama_upt);

            $data['terbilang'] = $this->load->helper("terbilang");

            $this->load->view('invoice_printV', $data);
        }
    }

    function delete_piutang()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->PiutangPrabu_m->delete_data($where, 'dt_piutang');
        redirect('piutangprabu');
    }

    function delete_invoice()
    {
        $id = $this->input->post('id');
        $where = array('id' => $id);
        $this->PiutangPrabu_m->delete_data($where, 'invoice');

        $nomor = $this->input->post('nomor');
        $nama_pel = $this->input->post('nama_pel');

        $where = array(
            'nama_pel' => $nama_pel,
            'nomor' => $nomor
        );
        $this->PiutangPrabu_m->delete_data($where, 'pelunasan');


        redirect('piutangprabu/invoice');
    }
}
