<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Design extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Design_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Design List';
        $data['design'] = $this->Design_model->getAllDesign();
        if ($this->input->post('keyword')) {
            $data['design'] = $this->Design_model->cariDataDesign();
        }
        $this->load->view('templates/user_header', $data);
        $this->load->view('design/index', $data);
        $this->load->view('templates/user_footer');
    }
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Design';

        $this->form_validation->set_rules('gambar', 'Gambar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('design/tambah');
            $this->load->view('templates/user_footer');
        } else {
            $this->Design_model->tambahDataDesign();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('design');
        }
    }

    public function hapus($id)
    {
        $this->Design_model->hapusDataDesign($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('design');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data design';
        $data['design'] = $this->Design_model->getDesignById($id);
        $this->load->view('templates/user_header', $data);
        $this->load->view('design/detail', $data);
        $this->load->view('templates/user_footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Design';
        $data['design'] = $this->Design_model->getDesignById($id);

        $this->form_validation->set_rules('gambar', 'Gambar');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('design/ubah', $data);
            $this->load->view('templates/user_footer');
        } else {
            $this->Design_model->ubahDataDesign();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('design');
        }
    }
}
