<?php

class TransaksiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title'         => 'Data Transaksi',
            'titleContent'  => 'Data Transaksi',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datatable/dataTransaksi');
        $this->load->view('templates/footer');
    }
}
