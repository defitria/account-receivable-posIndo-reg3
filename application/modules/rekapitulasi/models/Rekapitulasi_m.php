<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekapitulasi_m extends CI_Model
{
    public function getInvoicePbm($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pel', $keyword);
            $this->db->or_like('tgl', $keyword);
        }
        $this->db->select('*');
        $this->db->from('invoice');
        $this->db->where('nama_upt IN ("Prabumulih")');
        $this->db->order_by('tgl', 'DESC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getRekap($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pel', $keyword);
            $this->db->or_like('tgl', $keyword);
        }
        $this->db->select('*');
        $this->db->from('dt_piutang');
        $this->db->order_by('tgl', 'DESC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getRow($limit, $start, $opsi)
    {
        $this->db->select('*');
        $this->db->from('pelunasan');
        $this->db->where('nama_upt IN ("' . $opsi . '")');
        $this->db->order_by('tgl', 'DESC', $limit, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    function filtersaldoawal($tahun1, $nama_upt)
    {
        $blnsk = date('m');
        $bln4 = date('m', strtotime('-4 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_upt, bisnis, nama_pel, tgl, total_piutang as saldo_awal FROM dt_piutang where nama_upt = '$nama_upt' and YEAR(tgl) = '$tahun1' and MONTH(tgl) = '$bln4' ORDER BY id ASC ");

        return $query->result();
    }

    function filterpenambahan($tahun1, $bulanawal, $bulanakhir, $nama_upt)
    {

        $query = $this->db->query("SELECT bisnis, nama_pel, tgl, total_piutang as penambahan FROM dt_piutang where nama_upt = '$nama_upt' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir'  ORDER BY id ASC ");

        return $query->result();
    }

    function filterkas($tahun1, $nama_upt)
    {
        $blnsk = date('m');
        $bln4 = date('m', strtotime('-4 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel, pelunasan_bln, pelunasan as kas FROM pelunasan where nama_upt = '$nama_upt' and YEAR(pelunasan_bln) = '$tahun1' and MONTH(pelunasan_bln) = '$bln4'  ORDER BY id_pelunasan ASC ");

        return $query->result();
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hitungData()
    {
        return $this->db->get('lappiutang_uptprabu')->num_rows();
    }

    function gettahun()
    {

        $query = $this->db->query("SELECT YEAR(tgl) as tahun, nama_upt FROM dt_piutang GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC");

        return $query->result();
    }

    function filterbytanggal($tanggalawal, $tanggalakhir, $nama_upt)
    {
        $query = $this->db->query("SELECT * FROM dt_piutang where DATE(tgl) BETWEEN '$tanggalawal' and '$tanggalakhir' and nama_upt='$nama_upt' ORDER BY ID DESC ");

        return $query->result();
    }

    function filterbybulan($tahun1, $bulanawal, $bulanakhir, $nama_upt)
    {

        $query = $this->db->query("SELECT bisnis, nama_pel, prod, bsu, total_piutang FROM dt_piutang where nama_upt = '$nama_upt' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id DESC ");

        return $query->result();
    }

    function filterbytahun($tahun2, $nama_upt)
    {

        $query = $this->db->query("SELECT * from dt_piutang where YEAR(tgl) = '$tahun2' and nama_upt = '$nama_upt' ORDER BY tgl ASC ");

        return $query->result();
    }

    function detail_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function piutangPbm()
    {
        $query = $this->db->query("SELECT * FROM dt_piutang WHERE nama_upt = 'Prabumulih' ORDER BY id DESC");

        return $query->result_array();
    }

    function pelunasanPbm()
    {

        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Prabumulih' ORDER BY id_pelunasan DESC");

        return $query->result_array();
    }

    function pelunasanThnPbm()
    {

        $query = $this->db->query("SELECT nama_pel, nama_upt, YEAR(tgl_setor) as setor, tgl_setor FROM pelunasan WHERE nama_upt = 'Prabumulih' ORDER BY id_pelunasan DESC");

        return $query->row_array();
    }

    function piutangPbmToday()
    {
        $tgl = date('Y-m-d');

        $query = $this->db->query("SELECT * FROM dt_piutang WHERE nama_upt = 'Prabumulih' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }


    function pelunasanPbmToday()
    {
        $tgl = date('Y-m-d');

        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Prabumulih' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function piutangPbmWeek()
    {
        $tgl1 = date("Y-m-d");
        $t = mktime(0, 0, 0, date("n"), date("j") - 7, date("Y"));
        $tgl2 = date("Y-m-d", $t);

        $query = $this->db->query("SELECT * FROM dt_piutang WHERE DATE(tgl) BETWEEN '$tgl2' AND '$tgl1' AND nama_upt = 'Prabumulih' ORDER BY id DESC");

        return $query->result();
    }

    function pelunasanPbmWeek()
    {
        $tgl1 = date("Y-m-d");
        $t = mktime(0, 0, 0, date("n"), date("j") - 7, date("Y"));
        $tgl2 = date("Y-m-d", $t);

        $query = $this->db->query("SELECT * FROM pelunasan WHERE DATE(tgl) BETWEEN '$tgl2' AND '$tgl1' AND nama_upt = 'Prabumulih' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function piutangPbmMonth()
    {
        $bln1 = date('m-Y');

        $query = $this->db->query("SELECT * FROM dt_piutang WHERE nama_upt = 'Prabumulih' and MONTH(tgl) = '$bln1' ORDER BY id DESC");

        return $query->result();
    }

    function pelunasanPbmMonth()
    {
        $bln1 = date('m-Y');

        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Prabumulih' and MONTH(tgl) = '$bln1' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function view_reportPbm()
    {

        $query = $this->db->query("SELECT * FROM berkas WHERE nama_upt = 'Prabumulih' ORDER BY tgl DESC");
        return $query->result();
    }
}
