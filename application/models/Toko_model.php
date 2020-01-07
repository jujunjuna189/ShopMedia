<?php
class Toko_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function dataToko($limit, $start)
    {
        $this->db->join('pengguna', 'pengguna.id_pengguna=toko.id_pengguna');
        $toko = $this->db->get('toko', $limit, $start)->result();

        return $toko;
    }

    public function dataTokoById($id_toko)
    {
        $this->db->join('pengguna', 'pengguna.id_pengguna=toko.id_pengguna');
        $this->db->where('id_toko', $id_toko);
        $toko = $this->db->get('toko')->row();

        return $toko;
    }

    public function dataKategori()
    {
        $kategori = $this->db->get('kategori')->result();
        return $kategori;
    }

    public function dataKategoriById($id_kategori)
    {
        $data = $this->crud_model->dataById('kategori', 'id_kategori', $id_kategori);
        return $data;
    }

    public function prosesUbahKategori($id_kategori)
    {
        $where = [
            'id_kategori' => $id_kategori,
        ];
        $data = [
            'kategori'  => $this->input->post('kategori'),
        ];
        $proses = $this->crud_model->ubahData('kategori', $where, $data);
        return $proses;
    }

    public function tambahKategori()
    {
        $data = [
            'kategori'  => $this->input->post('kategori'),
        ];
        $tambah = $this->db->insert('kategori', $data);
        return $tambah;
    }
}
