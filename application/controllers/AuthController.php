<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Utama',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/modal');
        $this->load->view('halamanUtama/index');
        $this->load->view('templates/footer');
    }

    public function home()
    {
        echo 'Ok';
    }

    public function logout()
    {
        redirect('authController/');
    }
}
