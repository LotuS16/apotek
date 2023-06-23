<?php
defined('BASEPATH') or exit('No direct script access allowed');

class obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_obat');
    }
    
    public function index()
    {
        $data['judul'] = 'Obat';
        $data['obat'] = $this->M_obat->get_data('obat')->result();
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_obat');
        $this->load->view('menu_utama/V_footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Obat';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar");
        $this->load->view("obat/V_tambah_obat");
        $this->load->view('menu_utama/V_footer');
    }

    public function tambah_obat()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            #code....
            $this->tambah();
        }
        else {
            # code...
            $data = array(
                'nama_obat' => $this->input->post('nama_obat'),
                'non_generik' => $this->input->post('non_generik'),
                'jenis_obat' => $this->input->post('jenis_obat'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'brand_obat' => $this->input->post('brand_obat'),
                'harga_beli' => $this->input->post('harga_beli'),
                'harga_jual' => $this->input->post('harga_jual'),
                'tgl_masuk' => $this->input->post('tgl_masuk'),
                'tgl_exp' => $this->input->post('tgl_exp'),
            );

            $this->M_obat->insert_data($data, 'obat');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('obat');

        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_obat', 'nama_obat', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('non_generik', 'non_generik', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jenis_obat', 'jenis_obat', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('jumlah_barang', 'jumlah_barang', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('brand_obat', 'brand_obat', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('harga_beli', 'harga_beli', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('harga_jual', 'harga_jual', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required', array('required' => '%s harus diisi'));
        $this->form_validation->set_rules('tgl_exp', 'tgl_exp', 'required', array('required' => '%s harus diisi'));
    }

    public function delete($id_obat)
    {
        $where = array('id_obat' => $id_obat);
        $this->M_obat->delete($where, 'obat');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil hapus !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
        redirect('manager/second');
    } 

    public function edit($id_obat)
    {
        $where = array('id_obat' => $id_obat);
        $data['obat'] = $this->M_obat->edit_data($where,'obat')->result();
        $data['judul'] = 'Update Obat';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_edit_obat', $data);
        $this->load->view('menu_utama/V_footer');
    }

    public function update()
    {
        $id_obat = $this->input->post('id_obat'); 
        $nama_obat = $this->input->post('nama_obat');
        $non_generik = $this->input->post('non_generik'); 
        $jenis_obat = $this->input->post('jenis_obat');
        $jumlah_barang = $this->input->post('jumlah_barang'); 
        $brand_obat = $this->input->post('brand_obat');
        $harga_beli = $this->input->post('harga_beli');
        $harga_jual = $this->input->post('harga_jual');

        $data = array(
            "nama_obat" => $nama_obat,
            "non_generik" => $non_generik,
            "jenis_obat" => $jenis_obat,
            "jumlah_barang" => $jumlah_barang,
            "brand_obat" => $brand_obat,
            "harga_beli" => $harga_beli,
            "harga_jual" => $harga_jual,
        );

        $where = array(
            'id_obat' => $id_obat
        );

        $this->M_obat->update_data($where,$data, 'obat');
        redirect('obat/index');
    }

    public function detail($id_obat)
    {
        $this->load->model('M_obat');
        $detail = $this->M_obat->detail($id_obat);
        $data['detail'] = $detail;
        $data['judul'] = 'Detail Obat';
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_detail_obat', $data);
        $this->load->view('menu_utama/V_footer');
    }

    function print()
    {
      $data['obat'] = $this->M_obat->get_data('obat')->result();
      $this->load->view('obat/V_print_obat',$data);
    }

    function pengeluaran()
    {
        $data['judul'] = 'Pengeluaran Obat';
        $data['obat'] = $this->M_obat->get_data_ex('ex')->result();
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_pengeluaran_obat', $data);
        $this->load->view('menu_utama/V_footer');
    }
    
    function keluar()
    {
        $data['judul'] = 'Catatan Pengeluaran Obat';
        $data['obat'] = $this->M_obat->get_data_ex('ex')->result();
        $this->load->view("menu_utama/V_nav", $data);
        $this->load->view("menu_utama/V_sidebar", $data);
        $this->load->view('obat/V_keluar_obat', $data);
        $this->load->view('menu_utama/V_footer');
    }

    function keluarProses()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            #code....
            $this->keluar();
        }
        else {
            # code...
            $data = array(
                'nama_obat' => $this->input->post('nama_obat'),
                'jenis_obat' => $this->input->post('jenis_obat'),
                'jumlah_barang' => $this->input->post('jumlah_barang'),
                'tgl_catat' => $this->input->post('tgl_cat'),
            );

            $this->M_obat->insert_data_ex($data, 'ex');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil ditambahkan !<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('obat/keluar');
        }
    }
}