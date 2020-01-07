<?php
class Barang_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function dataBarangById($id_barang)
    {
        $this->db->join('kategori', 'kategori.id_kategori=barang.id_kategori');
        $this->db->where('id_barang', $id_barang);
        $data = $this->db->get('barang')->row();
        return $data;
    }

    public function dataBarangByIdToko($id_toko)
    {
        $this->db->join('kategori', 'kategori.id_kategori=barang.id_kategori');
        $this->db->where('id_toko', $id_toko);
        $data = $this->db->get('barang')->result();
        return $data;
    }

    public function tambahBarang($id_toko)
    {
        $post = $this->input->post();
        $data = [
            'id_toko'       => $id_toko,
            'id_kategori'   => $post['kategori'],
            'nama_barang'   => $post['nama_barang'],
            'harga'         => $post['harga'],
            'stok'          => $post['stok'],
            'foto_barang'   => 'barang.jpg',
        ];

        $barang = $this->db->insert('barang', $data);
        return $barang;
    }

    public function ubahBarang($id_barang)
    {
        $post = $this->input->post();
        $data = [
            'nama_barang'   => $post['nama_barang'],
            'harga'         => $post['harga'],
            'stok'          => $post['stok'],
            'foto_barang'   => 'barang.jpg',
        ];
        $this->db->where('id_barang', $id_barang);
        $ubah = $this->db->update('barang', $data);
        return $ubah;
    }

    public function hapusBarang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $hapus = $this->db->delete('barang');
        return $hapus;
    }
}
