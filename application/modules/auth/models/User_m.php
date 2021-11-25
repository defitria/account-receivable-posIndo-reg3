<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function auth($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('kd_user', $post['kd_user']);
        $this->db->where('password', $post['password']);
        // $this->db->where('le)
        $query = $this->db->get();
        return $query;
    }
}
