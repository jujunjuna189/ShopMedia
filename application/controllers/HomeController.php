<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'title'         => 'Home',
            'titleContent'  => 'Dashboard',
            'dashboard'     => 'yes',
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar',);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
