<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendataan_model extends CI_Model
{
    private $_table = "users";

    public $id;
    public $email;
    public $name;
    public $asal;
    public $divisi;
    public $lama;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'numeric'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'asal',
            'label' => 'Asal',
            'rules' => 'required'],

            ['field' => 'divisi',
            'label' => 'Divisi',
            'rules' => 'required'],
            
            ['field' => 'lama',
            'label' => 'Lama Magang',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($Id)
    {
        return $this->db->get_where($this->_table, ["id" => $Id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post["name"];
        $this->asal = $post["asal"];
        $this->divisi = $post["divisi"];
        $this->lama = $post["lama"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["Id"];
        $this->name = $post["name"];
        $this->asal = $post["asal"];
        $this->divisi = $post["divisi"];
        $this->lama = $post["lama"];
        return $this->db->update($this->_table, $this, array('id' => $post['Id']));
    }

    public function delete($Id)
    {
        return $this->db->delete($this->_table, array("id" => $Id));
    }
}