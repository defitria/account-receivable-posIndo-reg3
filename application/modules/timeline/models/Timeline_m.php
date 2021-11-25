<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timeline_m extends CI_Model
{

    function filterupt()
    {
        $query = $this->db->query("SELECT kode_upt, nama_upt FROM list_upt ORDER BY id ASC");

        return $query->result();
    }

    function filtermitra()
    {
        $query = $this->db->query("SELECT * FROM mitra ORDER BY nama_pel ASC");

        return $query->result();
    }

    function sumpiutangPg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Palembang' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangPbm()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Prabumulih' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangMe()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Muara Enim' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangLt()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Lahat' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangLlg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Lubuk Linggau' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangBta()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Baturaja' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangPgp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Pangkal Pinang' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangTdn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangMet()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangKb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Kota Bumi' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangBdl()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Bandar Lampung' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangJb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Jambi' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangSpn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Sungai Penuh' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangMab()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Muara Bungo' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangBn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Bengkulu' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function sumpiutangCrp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT nama_upt, nama_pel, SUM(prod) as prod, SUM(total_piutang) as total_piutang FROM dt_piutang WHERE nama_upt = 'Curup' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function piutangUptToday($upt)
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM dt_piutang WHERE nama_upt = '$upt' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function pelunasanUptToday($upt)
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = '$upt' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanPg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Palembang' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanPbm()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Prabumulih' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanMe()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Muara Enim' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanLt()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Lahat' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanLlg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Lubuk Linggau' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanBta()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Baturaja' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanPgp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Pangkal Pinang' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanTdn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanMet()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanKb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Kota Bumi' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanBdl()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Bandar Lampung' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanJb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Jambi' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanSpn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Sungai Penuh' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanMab()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Muara Bungo' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanBn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Bengkulu' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function sumpelunasanCrp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = 'Curup' and DATE(tgl) = '$tgl' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function invoiceUptToday($upt)
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = '$upt' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoicePg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Palembang' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoicePbm()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Prabumulih' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceMe()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Muara Enim' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceLt()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Lahat' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceLlg()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Lubuk Linggau' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceBta()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Baturaja' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoicePgp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Pangkal Pinang' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceTdn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceMet()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Tanjung Pandan' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceKb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Kota Bumi' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceBdl()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Bandar Lampung' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceJb()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Jambi' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceSpn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Sungai Penuh' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceMab()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Muara Bungo' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceBn()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Bengkulu' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function suminvoiceCrp()
    {
        $tgl = date('Y-m-d');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = 'Curup' and DATE(tgl) = '$tgl' ORDER BY id DESC");

        return $query->result();
    }

    function piutangUptWeek($upt)
    {
        $tgl1 = date("Y-m-d");
        $t = mktime(0, 0, 0, date("n"), date("j") - 7, date("Y"));
        $tgl2 = date("Y-m-d", $t);

        $query = $this->db->query("SELECT * FROM dt_piutang WHERE DATE(tgl) BETWEEN '$tgl2' AND '$tgl1' AND nama_upt = '$upt' ORDER BY id DESC");

        return $query->result();
    }

    function pelunasanUptWeek($upt)
    {
        $tgl1 = date("Y-m-d");
        $t = mktime(0, 0, 0, date("n"), date("j") - 7, date("Y"));
        $tgl2 = date("Y-m-d", $t);

        $query = $this->db->query("SELECT * FROM pelunasan WHERE DATE(tgl) BETWEEN '$tgl2' AND '$tgl1' AND nama_upt = '$upt' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function invoiceUptWeek($upt)
    {
        $tgl1 = date("Y-m-d");
        $t = mktime(0, 0, 0, date("n"), date("j") - 7, date("Y"));
        $tgl2 = date("Y-m-d", $t);

        $query = $this->db->query("SELECT * FROM invoice WHERE DATE(tgl) BETWEEN '$tgl2' AND '$tgl1' AND nama_upt = '$upt' ORDER BY id DESC");

        return $query->result();
    }

    function piutangUptMonth($upt)
    {
        $bln1 = date('m-Y');
        $query = $this->db->query("SELECT * FROM dt_piutang WHERE nama_upt = '$upt' and MONTH(tgl) = '$bln1' ORDER BY id DESC");

        return $query->result();
    }

    function pelunasanUptMonth($upt)
    {
        $bln1 = date('m-Y');
        $query = $this->db->query("SELECT * FROM pelunasan WHERE nama_upt = '$upt' and MONTH(tgl) = '$bln1' ORDER BY id_pelunasan DESC");

        return $query->result();
    }

    function invoiceUptMonth($upt)
    {
        $bln1 = date('m-Y');
        $query = $this->db->query("SELECT * FROM invoice WHERE nama_upt = '$upt' and MONTH(tgl) = '$bln1' ORDER BY id DESC");

        return $query->result();
    }
}
