<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Terbilang extends CI_Controller
{

    function index()
    {
        $this->load->helper("terbilang");
        $angka = 3198100;
        echo terbilang($angka) . ' Rupiah';
        // echo ucwords(number_to_words("87,5"));
    }
}
