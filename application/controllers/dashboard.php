<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'dashboard';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('menu_utama/V_dashboard');
        $this->load->view('menu_utama/V_footer');
        
    }

}