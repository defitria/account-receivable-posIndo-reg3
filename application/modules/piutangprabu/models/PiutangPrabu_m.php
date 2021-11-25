<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PiutangPrabu_m extends CI_Model
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
        $this->db->where('status IN ("0")');
        $this->db->order_by('tgl', 'DESC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPiutangPbm($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama_pel', $keyword);
            $this->db->or_like('tgl', $keyword);
        }
        $this->db->select('*');
        $this->db->from('dt_piutang');
        $this->db->where('nama_upt IN ("Prabumulih")');
        $this->db->order_by('tgl', 'DESC', $limit, $start, $keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    function pelunasan($nama_pel, $nama_upt)
    {
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_pel='$nama_pel' and nama_upt = '$nama_upt'  ORDER BY id_pelunasan ASC");
        return $query->row_array();
    }

    public function hitungData()
    {
        return $this->db->get('dt_piutang')->num_rows();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function add_invoice($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function detail_invoice()
    {
        return $this->db->get();
    }

    function input_invoice($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function input_pel($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function gettahun()
    {

        $query = $this->db->query("SELECT YEAR(tgl) AS tahun, nama_upt FROM invoice GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC");

        return $query->result();
    }

    function mitraPbm()
    {

        $query = $this->db->query("SELECT nama_pel, nama_upt FROM mitra WHERE nama_upt = 'Prabumulih' ORDER BY id_mitra ASC");

        return $query->result();
    }

    function bisnisPbm()
    {

        $query = $this->db->query("SELECT bisnis, nama_upt FROM tbl_bisnis WHERE nama_upt = 'Prabumulih' ORDER BY id_bisnis ASC");

        return $query->result();
    }


    function filtersurat($nama_pel, $nama_upt, $tahun1, $bulanawal, $bulanakhir)
    {

        $query = $this->db->query("SELECT nama_upt, bisnis, nama_pel, SUM(prod) as prod, SUM(total_piutang) as jumlah FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and bisnis = 'SURAT' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id ASC ");

        return $query->result();
    }


    function filterpaket($nama_pel, $nama_upt, $tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT nama_upt, bisnis, nama_pel, SUM(prod) as prod, SUM(total_piutang) as jumlah FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and bisnis = 'PAKET' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id ASC ");

        return $query->result();
    }

    function filterinlogistik($nama_pel, $nama_upt, $tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT nama_upt, bisnis, nama_pel, SUM(prod) as prod, SUM(total_piutang) as jumlah FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and bisnis = 'inlogistik' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id ASC ");

        return $query->result();
    }

    function filterkargopos($nama_pel, $nama_upt, $tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT nama_upt, bisnis, nama_pel, SUM(prod) as prod, SUM(total_piutang) as jumlah FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and bisnis = 'kargo pos' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id ASC ");

        return $query->result();
    }

    function sum($nama_pel, $nama_upt, $tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT bisnis, SUM(prod) as prod, SUM(total_piutang) as total FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY id ASC ");

        return $query->result();
    }

    function piutangBln2($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln4 = date('m', strtotime('-1 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel, statusp, nama_upt, tgl, SUM(total_piutang) as jumlah1 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln4' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln2($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln4 = date('m', strtotime(strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan WHERE MONTH(tgl) = '$bln4' and nama_pel='$nama_pel' and nama_upt = '$nama_upt' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function piutangBln3($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln5 = date('m', strtotime('-2 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel, statusp, tgl, nama_upt , SUM(total_piutang) as jumlah2 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln5' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln3($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln5 = date('m', strtotime('-1 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and MONTH(tgl) = '$bln5' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function piutangBln4($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln6 = date('m', strtotime('-3 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel, statusp,tgl,nama_upt , SUM(total_piutang) as jumlah3 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln6' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln4($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln6 = date('m', strtotime('-2 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and MONTH(tgl) = '$bln6' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function piutangBln5($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln7 = date('m', strtotime('-4 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel,statusp ,tgl,nama_upt, SUM(total_piutang) as jumlah4 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln7' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln5($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln7 = date('m', strtotime('-3 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and MONTH(tgl) = '$bln7' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function piutangBln6($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln8 = date('m', strtotime('-5 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel ,statusp,tgl,nama_upt, SUM(total_piutang) as jumlah5 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln8' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln6($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln8 = date('m', strtotime('-4 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and MONTH(tgl) = '$bln8' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function piutangBln7($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln9 = date('m', strtotime('-6 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT nama_pel,statusp,tgl, nama_upt , SUM(total_piutang) as jumlah6 FROM dt_piutang where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and statusp='0' and MONTH(tgl) = '$bln9' ORDER BY nama_upt ASC ");

        return $query->result();
    }

    function pelunasanBln7($nama_pel, $nama_upt)
    {
        // $thnsk = date('Y');
        $blnsk = date('m');
        $bln9 = date('m', strtotime('-5 month', strtotime($blnsk)));
        $query = $this->db->query("SELECT * FROM pelunasan where nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and MONTH(tgl) = '$bln9' ORDER BY id_pelunasan ASC ");

        return $query->row_array();
    }

    function filterinvoice($nama_pel, $nama_upt)
    {
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_pel = '$nama_pel' and nama_upt = '$nama_upt' and status='0' ORDER BY id DESC");
        return $query->row();
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
