<?php
defined('BASEPATH') or exit('No direct script access allowed');

class resep_dokter extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Resep Dokter';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('resepdokter/V_resep_dokter');
        $this->load->view('menu_utama/V_footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Resep Dokter';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('resepdokter/V_tambah_resep');
        $this->load->view('menu_utama/V_footer');
    }
}