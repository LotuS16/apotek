<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_obat extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function detail($id_obat = NULL)
    {
        $query = $this->db->get_where('obat',array('id_obat' => $id_obat))->row();
        return $query;
    }

    function keluar()
    {
      $query = $this->db->query("SELECT * FROM obat order by nama_obat asc");
      return $query->result();
    }

    public function get_data_ex($table)
    {
        return $this->db->get($table);
    }

    public function insert_data_ex($data, $table)
    {
        $this->db->insert($table, $data);
    }
}