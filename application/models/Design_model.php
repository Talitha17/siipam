<?php

class Design_model extends CI_model
{
    public function getAllDesign()
    {
        return $this->db->get('design')->result_array();
    }

    public function tambahDataDesign()
    {
        $data = [
            "gambar" => $this->input->post('gambar', true),
            "nama" => $this->input->post('nama', true),
            "tahun" => $this->input->post('tahun', true),
            "deskripsi" => $this->input->post('deskripsi', true),
        ];

        $this->db->insert('design', $data);
    }

    public function hapusDataDesign($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('design', ['id' => $id]);
    }

    public function getDesignById($id)
    {
        return $this->db->get_where('design', ['id' => $id])->row_array();
    }

    public function ubahDatadesign()
    {
        $data = [
            "gambar" => $this->input->post('gambar', true),
            "nama" => $this->input->post('nama', true),
            "tahun" => $this->input->post('tahun', true),
            "deskripsi" => $this->input->post('deskripsi', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('design', $data);
    }

    public function cariDataDesign()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('tahun', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        return $this->db->get('design')->result_array();
    }

    public function getdDesign($id = null)
    {
        if ($id === null) {
            return $this->db->get('design')->result_array();
        } else {
            return $this->db->get_where('design', ['id' => $id])->result_array();
        }
    }
}
