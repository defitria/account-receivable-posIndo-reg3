<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        check_already_login();
        $this->load->view('auth_v');
    }

    public function check()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->auth($post);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'kd_user' => $row->kd_user,
                    'nama_upt' => $row->nama_upt,
                    'level' => $row->level,
                );
                $this->session->set_userdata($params);
                echo "<script>
                    window.location='" . site_url('dashboard') . "';
                </script>";
            } else {
                $this->session->set_flashdata("info", '<div class="alert alert-danger">
                <strong>Error!</strong> Username dan password salah. 
                </div>');
                echo "<script>
                    window.location='" . site_url('auth') . "';
                </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('kd_user', 'level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}
