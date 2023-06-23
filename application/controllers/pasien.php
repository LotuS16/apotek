<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pasien');
    }
    public function index()
    {
        $data['judul'] = 'Pasien';
        $data['pasien'] = $this->M_pasien->get_data('pasien')->result();
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('menu_utama/V_pasien', $data);
        $this->load->view('menu_utama/V_footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Pasien';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('menu_utama/V_tambah_pasien');
        $this->load->view('menu_utama/V_footer');
    }

    public function tambah_pasien()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            #code....
            $this->tambah();
        }
        else {
            # code...
            $data = array(
                'nama_pasien' => $this->input->post('nama_pasien'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'nomor_hp' => $this->input->post('nomor_hp'),
            );

            $this->M_pasien->insert_data($data, 'pasien');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('pasien');

        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_pasien', 'nama_pasien', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('alamat', 'alamat', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('nomor_hp', 'nomor_hp', 'required', array('required' => '%s harus diisi'));
    }

    public function delete($id_pasien)
    {
        $where = array('id_pasien' => $id_pasien);
        $this->M_pasien->delete($where, 'pasien');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil hapus !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
        redirect('pasien/index');
    } 

    public function edit($id_pasien)
    {
        $where = array('id_pasien' => $id_pasien);
        $data['pasien'] = $this->M_pasien->edit_data($where,'pasien')->result();
        $data['judul'] = 'Update Pasien';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('menu_utama/V_pasien_edit', $data);
        $this->load->view('menu_utama/V_footer');   
        
    }

    public function update()
    {
        $id_pasien = $this->input->post('id_pasien'); 
        $nama_pasien = $this->input->post('nama_pasien');
        $alamat = $this->input->post('alamat'); 
        $email = $this->input->post('email'); 
        $nomor_hp = $this->input->post('nomor_hp'); 

        $data = array(
            "nama_pasien" => $nama_pasien,
            "alamat" => $alamat,
            "email" => $email,
            "nomor_hp" => $nomor_hp
        );

        $where = array(
            'id_pasien' => $id_pasien
        );

        $this->M_pasien->update_data($where,$data, 'pasien');
        redirect('pasien/index');
    }
}