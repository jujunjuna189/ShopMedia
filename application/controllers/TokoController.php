<?php

class TokoController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('toko_model');
        $this->load->model('barang_model');
        $this->load->model('crud_model');
    }

    public function index()
    {

        $config['base_url'] = base_url('tokoController/');
        $config['total_rows'] = $this->db->count_all('toko');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Style
        $config['first_link']           = 'First';
        $config['last_link']            = 'Last';
        $config['next_link']            = 'Next';
        $config['prev_link']            = 'Prev';
        $config['full_tag_open']        = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']       = '</ul></nav></div>';
        $config['num_tag_open']         = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']        = '</span></li>';
        $config['cur_tag_open']         = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']        = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']        = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']      = '<span aria-hidden="true">&requo;</span></span>/</li>';
        $config['prev_tag_open']        =  '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']      = '</span>Next</li>';
        $config['first_tag_open']       = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close']     = '</span></li>';
        $config['last_tag_open']        = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']      = '</span></li>';

        $this->pagination->initialize($config);
        $data['page']   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data = [
            'title'         => 'Data Toko',
            'titleContent'  => 'Data Toko',
            'dataToko'      => $this->toko_model->dataToko($config['per_page'], $data['page']),
            'pagination'    => $this->pagination->create_links(),
            'toko'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datatable/dataToko');
        $this->load->view('templates/footer');
    }

    public function formToko()
    {
        $data = [
            'title'         => 'Form Toko',
            'titleContent'  => '',
            'toko'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('form/formToko');
        $this->load->view('templates/footer');
    }

    public function detailToko($id_toko)
    {
        $url = base_url('assets/js/detailBarang.js');
        $data = [
            'title'         => 'Detail Toko',
            'titleContent'  => '',
            'toko'          => $this->toko_model->dataTokoById($id_toko),
            'kategori'      => $this->toko_model->dataKategori(),
            'dataBarang'    => $this->barang_model->dataBarangByIdToko($id_toko),
            'js'            => '<script src="' . $url . '"></script>',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/sidebar');
        $this->load->view('detail/detailToko');
        $this->load->view('templates/footer');
    }

    public function dataKategori()
    {

        $url = base_url('assets/js/jsKategori.js');
        $data = [
            'title'         => 'Data Kategori',
            'titleContent'  => 'Data Kategori',
            'no'            => '1',
            'kategori'      => $this->toko_model->dataKategori(),
            'js'            => '<script src="' . $url . '"></script>',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/modal');
        $this->load->view('templates/sidebar');
        $this->load->view('datatable/dataKategori');
        $this->load->view('templates/footer');
    }

    public function dataKategoriById($id_kategori)
    {
        $data = $this->toko_model->dataKategoriById($id_kategori);
        echo json_encode($data);
    }

    public function tambahKategori()
    {
        $tambah = $this->toko_model->tambahKategori();
        if ($tambah == true) {
            redirect('tokoController/dataKategori/');
        } else {
            redirect('tokoController/dataKategori/');
        }
    }

    public function prosesUbahKategori($id_kategori)
    {
        $prosesUbah = $this->toko_model->prosesUbahKategori($id_kategori);
        if ($prosesUbah == true) {
            redirect('tokoController/dataKategori/');
        } else {
            redirect('tokoController/dataKategori/');
        }
    }

    public function hapusKategori($id_kategori)
    {
        $hapus = $this->crud_model->hapus('kategori', 'id_kategori', $id_kategori);
        if ($hapus == true) {
            redirect('tokoController/dataKategori/');
        } else {
            redirect('tokoController/dataKategori/');
        }
    }
}
