<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendataan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Anak Magang';
        $data['users'] = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['pendataan'] = $this->db->get('users')->result_array();

        $this->form_validation->set_rules('pendataan', 'Pendataan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pendataan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('users', ['pendataan' => $this->input->post('pendataan')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New Data added! </div>');
            redirect('pendataan');
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('pendataan');

        $users = $this->users_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Anak Magang berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("pendataan");
        }
        $data["title"] = "Edit Data Anak Magang";
        $data["users"] = $users->getById($id);
        if (!$data["users"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('pendataan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function delete()
    {
        $Id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Pendataan_model->delete($Id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Anak Magang berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));
    }
}
