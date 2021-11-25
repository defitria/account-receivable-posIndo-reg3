<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('Dashboard_m');
    }

    public function index()
    {
        // $data['main_menu'] = $this->Dashboard_m->main_menu();
        // $data['sub_menu'] = $this->Dashboard_m->sub_menu();


        $this->template->load('template', 'dashboard_v');
    }
}
