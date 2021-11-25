<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PelunasanPrabu_m extends CI_Model
{

    public function getPelunasanPbm($limit, $start, $keyword)
    {
        if ($keyword) {
            $this->db->like('nama_pel', $keyword);
            $this->db->or_like('tgl', $keyword);
        }
        $this->db->select('*');
        $this->db->from('pelunasan');
        $this->db->where('nama_upt IN ("Prabumulih")');
        $this->db->order_by('tgl DESC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getStatus($limit, $start, $keyword)
    {
        if ($keyword) {
            $this->db->like('nama_pel', $keyword);
            $this->db->or_like('tgl', $keyword);
        }
        $this->db->select('*');
        $this->db->from('pelunasan');
        $this->db->where('nama_upt IN ("Prabumulih")');
        $this->db->order_by('nama_pel', 'ASC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function hitungData()
    {
        return $this->db->get('pelunasan')->num_rows();
    }

    function filterMitraPbm()
    {
        $query = $this->db->query("SELECT * FROM pelunasan JOIN invoice ON pelunasan.nama_pel = invoice.nama_pel");

        return $query->result();
    }

    function pencarian_d($nama_pel)
    {
        $query = $this->db->query("SELECT * FROM invoice WHERE invoice.nama_pel='$nama_pel' ");

        return $query->result();
    }

    function pencarian_dt($nama_pel)
    {
        $query = $this->db->query("SELECT * FROM pelunasan JOIN invoice ON pelunasan.nama_pel = invoice.nama_pel WHERE invoice.nama_pel='$nama_pel' ");

        return $query->result();
    }

    function mitraPbm()
    {

        $query = $this->db->query("SELECT nama_pel, nama_upt FROM mitra WHERE nama_upt = 'Prabumulih' ORDER BY id_mitra ASC");

        return $query->result();
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
