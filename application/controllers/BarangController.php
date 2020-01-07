<?php

class BarangController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('barang_model');
    }

    public function dataBarangById($id_barang)
    {
        $data = $this->barang_model->dataBarangById($id_barang);
        echo json_encode($data);
    }

    public function tambahBarang($id_toko)
    {
        $tambah = $this->barang_model->tambahBarang($id_toko);
        if ($tambah == true) {
            redirect('tokoController/detailToko/' . $id_toko);
        } else {
            redirect('tokoController/detailToko/' . $id_toko);
        }
    }

    public function ubahBarang($id_barang, $id_toko)
    {
        $ubah = $this->barang_model->ubahBarang($id_barang);
        if ($ubah == true) {
            redirect('tokoController/detailToko/' . $id_toko);
        } else {
            redirect('tokoController/detailToko/' . $id_toko);
        }
    }

    public function hapusBarang($id_barang, $id_toko)
    {
        $hapus = $this->barang_model->hapusBarang($id_barang);
        if ($hapus == true) {
            redirect('tokoController/detailToko/' . $id_toko);
        } else {
            redirect('tokoController/detailToko/' . $id_toko);
        }
    }
}
