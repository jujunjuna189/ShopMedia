<?php

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('user_model');
    }

    public function index()
    {
        $config['base_url']     = base_url('userController/index');
        $config['total_rows']   = $this->db->count_all('pengguna');
        $config['per_page']     = 5;
        $config['uri_segment']  = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Style
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&requo;</span></span>/</li>';
        $config['prev_tag_open']    =  '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page']   = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data = [
            'title'         => 'Data User',
            'titleContent'  => 'Data User',
            'pengguna'      => $this->user_model->getPengguna($config['per_page'], $data['page']),
            'pagination'    => $this->pagination->create_links(),
            'user'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datatable/dataUser');
        $this->load->view('templates/footer');
    }

    public function dataAdmin()
    {
        $config['base_url'] = base_url('userController/dataAdmin');
        $config['total_rows'] = $this->db->count_all('admin');
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
            'title'         => 'Data Admin',
            'titleContent'  => 'Data Admin',
            'admin'         => $this->user_model->getAdmin($config['per_page'], $data['page']),
            'pagination'    => $this->pagination->create_links(),
            'user'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datatable/dataAdmin');
        $this->load->view('templates/footer');
    }

    public function tambahUser()
    {
        $data = [
            'title'         => 'Form User',
            'titleContent'  => 'Form User',
            'action'        => base_url('UserController/prosesTambahUser/'),
            'user_role'     => $this->user_model->getRole('user'),
            'user'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('form/formUser');
        $this->load->view('templates/footer');
    }

    public function tambahAdmin()
    {
        $data = [
            'title'         => 'Form Admin',
            'titleContent'  => 'Form Admin',
            'action'        => base_url('UserController/prosesTambahAdmin/'),
            'user_role'     => $this->user_model->getRole('admin'),
            'user'          => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('form/formUser');
        $this->load->view('templates/footer');
    }

    public function prosesTambahUser()
    {
        $tambah = $this->user_model->prosesTambahUser();
        if ($tambah == true) {
            redirect('userController/');
        } else {
            redirect('userController/dataAdmin');
        }
    }

    public function prosesTambahAdmin()
    {
        $tambah = $this->user_model->prosesTambahAdmin();
        if ($tambah == true) {
            redirect('userController/dataAdmin');
        } else {
            redirect('userController/dataAdmin');
        }
    }
}
