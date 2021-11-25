<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataNone extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
    }

    public function index()
    {
        $this->template->load('template', 'datanone_v', $data);
    }
}
