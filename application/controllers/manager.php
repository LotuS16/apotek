<?php
defined('BASEPATH') or exit('No direct script access allowed');

class manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_obat');
    }
    function index()
    {
        $this->load->view('manager/V_login_manager');
    }

    public function second()
    {
        $data['judul'] = 'Manager';
        $data['login'] = 'Manager';
        $data['obat'] = $this->M_obat->get_data('obat')->result();
        $this->load->view("manager/V_nav_manager", $data);
        $this->load->view("manager/V_sidebar_manager",);
        $this->load->view('manager/V_manager.php');
        $this->load->view("manager/V_footer_manager",);
    }

    public function detailObat($id_obat)
    {
        $this->load->model('M_obat');
        $detail = $this->M_obat->detail($id_obat);
        $data['detail'] = $detail;
        $data['judul'] = 'Detail Obat';
        $this->load->view("manager/V_nav_manager", $data);
        $this->load->view("manager/V_sidebar_manager",);
        $this->load->view('manager/V_detail_manager');
        $this->load->view("manager/V_footer_manager",);
    }


}