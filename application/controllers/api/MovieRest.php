<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class MovieRest extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MovieRest_Model', 'movierest');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null){
            $movie = $this->movierest->getAllMovie();
        }else{
            $movie = $this->movierest->getAllMovie($id);
        }
        if($movie){
            $this->response([
                'status' => TRUE,
                'data' => $movie
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'mesage' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
        
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->movierest->deleteMovie($id) > 0){
                //ok
                $this->response([
                    'status' => TRUE,
                    'id' => $id,
                    'message' => 'data deleted'
                ], REST_Controller::HTTP_OK);
            }else {
                //idnotfound
                $this->response([
                    'status' => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(Type $var = null)
    {
        $data = [
            'gambar' => $this->post('gambar'),
            'nama' => $this->post('nama'),
            'tahun' => $this->post('tahun'),
            'deskripsi' => $this->post('deskripsi'),
        ];
        if ($this->movierest->createMovie($data)>0){
            $this->response([
                'status' => TRUE,
                'message' => 'new design has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //idnotfound
            $this->response([
                'status' => FALSE,
                'message' => 'failed to create!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'gambar' => $this->put('gambar'),
            'nama' => $this->put('nama'),
            'tahun' => $this->put('tahun'),
            'deskripsi' => $this->put('deskripsi'),
        ];

        if ($this->movierest->updateMovie($data, $id)>0){
            $this->response([
                'status' => TRUE,
                'message' => 'movie has been updated'
            ], REST_Controller::HTTP_OK);
        } else {
            //idnotfound
            $this->response([
                'status' => FALSE,
                'message' => 'failed to update!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

}