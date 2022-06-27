<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Design_model');
        $this->load->library('form_validation');
    }
    public function index($nama = 'Friends')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $data['design'] = $this->Design_model->getAllDesign();
        if ($this->input->post('keyword')) {
            $data['design'] = $this->Design_model->cariDatadesign();
        }
        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer');
    }
}
