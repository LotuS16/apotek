<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pasien extends CI_Model
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
}