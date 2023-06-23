<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kasir extends CI_Controller
{
    function __construct()
    {
        parent ::__construct();
        $this->load->model('M_obats');
    }

    function index()
    {
        $data['judul'] = 'Laporan Obat';
        $data['obat'] = $this->M_obat->get_data('obat')->result();
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_pengeluaran_obat');
        $this->load->view('menu_utama/V_footer');
    }

    function pengeluaran()
    {
        
    }
}