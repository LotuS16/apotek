<?php
defined('BASEPATH') or exit('No direct script access allowed');

class web extends CI_Controller
{
    public function index()
    {
        $this->load->view('web/V_navbar');
        $this->load->view('web/V_index');
        $this->load->view('web/V_footer');
    }

    
}