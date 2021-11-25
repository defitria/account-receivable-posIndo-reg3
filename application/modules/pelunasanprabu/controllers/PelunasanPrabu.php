<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PelunasanPrabu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        cek_level_manager();
        cek_level_kepala();

        $this->load->model('PelunasanPrabu_m');
        $this->load->helper('url');
    }

    public function index()
    {

        /// Pagination
        $this->load->library('pagination');

        $config['base_url'] = 'http://[::1]//pos/pelunasanprabu/index';


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
        $data['row'] = $this->PelunasanPrabu_m->getPelunasanPbm($config['per_page'], $data['start'], $data['keyword']);
        $data['status'] = $this->PelunasanPrabu_m->getStatus($config['per_page'], $data['start'], $data['keyword']);

        $this->template->load('template', 'pelunasan_uptprabuV', $data);
    }

    function add_pelunasan()
    {

        $data['row'] = $this->PelunasanPrabu_m->filterMitraPbm();
        $data['mitraPbm'] = $this->PelunasanPrabu_m->mitraPbm();
        $this->template->load('template', 'pelunasan_addV', $data);
    }

    function pencarian()
    {
        $nama_pel = $this->input->get('nama_pel');
        $data['mitraPbm'] = $this->PelunasanPrabu_m->mitraPbm();
        $data['pel'] = $this->PelunasanPrabu_m->pencarian_dt($nama_pel);

        $this->template->load('template', 'pelunasancari_addV', $data);
    }

    function input_act()
    {
        $nomor = $this->input->post('nomor');
        $nama_pel = $this->input->post('nama_pel');
        $pelunasan = $this->input->post('pelunasan');
        $deposit = $this->input->post('deposit');
        $pel_bln = $this->input->post('pel_bln');
        $status = $this->input->post('status');

        $data = array(
            'id_pelunasan' => "",
            'nama_upt' => "Prabumulih",
            'nomor' => "$nomor",
            'nama_pel' => "$nama_pel",
            'pelunasan' => "$pelunasan",
            'deposit' => "$deposit",
            'pelunasan_bln' => "$pel_bln",
            'status' => "$status",
        );

        $this->db->set('tgl', 'NOW()', FALSE);
        $this->PelunasanPrabu_m->input_data($data, 'pelunasan');
        redirect('pelunasanprabu');
    }

    function update()
    {
        if ($this->input->post('update')) {
            $id = $this->input->post('id');
            $nomor = $this->input->post('nomor');
            $nama_pel = $this->input->post('nama_pel');
            $kd_referensi = $this->input->post('kd_referensi');
            $pelunasan = $this->input->post('pelunasan');
            $deposit = $this->input->post('deposit');
            $tgl_setor = $this->input->post('tgl_setor');
            $status = $this->input->post('status');

            $data = array(
                'nomor' => $nomor,
                'nama_pel' => $nama_pel,
                'kd_referensi' => $kd_referensi,
                'pelunasan' => $pelunasan,
                'deposit' => $deposit,
                'tgl_setor' => $tgl_setor,
                'status' => $status,
            );

            $where = array(
                'id_pelunasan' => $id
            );

            $this->db->set('tgl', 'NOW()', FALSE);
            $this->PelunasanPrabu_m->update_data($where, $data, 'pelunasan');
            redirect('PelunasanPrabu');
        } elseif ($this->input->post('lunas')) {

            $id = $this->input->post('id');
            $nomor = $this->input->post('nomor');
            $nama_pel = $this->input->post('nama_pel');
            $kd_referensi = $this->input->post('kd_referensi');
            $pelunasan = "LUNAS";
            $deposit = $this->input->post('deposit');
            $tgl_setor = $this->input->post('tgl_setor');
            $status = "1";

            $data = array(
                'nomor' => $nomor,
                'nama_pel' => $nama_pel,
                'kd_referensi' => $kd_referensi,
                'pelunasan' => $pelunasan,
                'deposit' => $deposit,
                'tgl_setor' => $tgl_setor,
                'status' => $status,
            );

            $where = array(
                'id_pelunasan' => $id
            );

            $this->db->set('tgl', 'NOW()', FALSE);
            $this->PelunasanPrabu_m->update_data($where, $data, 'pelunasan');

            $status = "1";

            $data = array(
                'status' => $status
            );

            $where = array(
                'nomor' => $nomor,
                'nama_pel' => $nama_pel
            );

            $this->PelunasanPrabu_m->update_data($where, $data, 'invoice');

            redirect('PelunasanPrabu');
        }
    }

    function delete()
    {
        $id = $this->input->post('id_pelunasan');
        $where = array('id_pelunasan' => $id);
        $this->PelunasanPrabu_m->delete_data($where, 'pelunasan');
        redirect('pelunasanprabu');
    }
}
