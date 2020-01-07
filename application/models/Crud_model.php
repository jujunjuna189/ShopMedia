<?php
class Crud_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function dataById($table, $where, $value)
    {
        $this->db->where($where, $value);
        $data = $this->db->get($table)->row();
        return $data;
    }

    public function ubahData($table, $where, $value)
    {
        $this->db->where($where);
        $ubah = $this->db->update($table, $value);
        return $ubah;
    }

    public function hapus($table, $where, $value)
    {
        $this->db->where($where, $value);
        $hapus = $this->db->delete($table);
        return $hapus;
    }
}
