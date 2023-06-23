<?php
defined('BASEPATH') or exit('No direct script access allowed');

class index extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Admin';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar");
        $this->load->view('menu_utama/V_index');
        $this->load->view('menu_utama/V_footer');
    }

}