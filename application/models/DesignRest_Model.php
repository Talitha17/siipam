<?php

class DesignRest_Model extends CI_model
{
    public function getAllDesign($id = null)
    {
        if ($id === null) {
            return $this->db->get('design')->result_array();
        } else {
            return $this->db->get_where('design', ['id' => $id])->result_array();
        }
    }

    public function deleteDesign($id)
    {
        $this->db->delete('design', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createDesign($data)
    {
        $this->db->insert('design', $data);
        return $this->db->affected_rows();
    }

    public function updateDesign($data, $id)
    {
        $this->db->update('design', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
}
