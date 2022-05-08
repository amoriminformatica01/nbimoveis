<?php

namespace App\Controllers;

use App\Models\ImoveisModel;
use CodeIgniter\RESTful\ResourceController;

class Imoveis extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $imoveis = new ImoveisModel();
        $data = [
            'imoveis' => $imoveis->findAll(),
        ];
        echo view('site/template/header');
        echo view('site/imoveis/index', $data);
        echo view('site/template/footer');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id=true)
    {
        $imoveis = new ImoveisModel();
        $data = [
            'imoveis' => $imoveis->find($id),
        ];
        echo view('site/template/header');
        echo view('site/imoveis/ver', $data);
        echo view('site/template/footer');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
