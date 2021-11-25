<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
    }

    public function index()
    {
        $this->template->load('template', 'notfound_v');
    }
}
