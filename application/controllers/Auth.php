<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('account/login');
        $this->load->view('templates/auth_footer');
    }
    public function registration()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('account/registration');
        $this->load->view('templates/auth_footer');
    }
}
