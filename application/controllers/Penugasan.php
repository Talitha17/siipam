<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penugasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Penugasan';
        $data['users'] = $this->db->get_where(
            'users',
            ['email' => $this->session->userdata('email')]
        )
            ->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penugasan/index', $data);
        $this->load->view('templates/footer');
    }
}