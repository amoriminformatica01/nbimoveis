<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ImoveisModel;
use App\Models\TipoModel;
use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $tipos = new TipoModel();
        $categorias = new CategoriaModel();
        $imoveis = new ImoveisModel();
        
       
        $data = [
            'tipos' => $tipos->findAll(),
            'categorias' => $categorias->findAll(),
            'imoveis' => $imoveis->paginate(10),
            'pager' =>$imoveis->pager,
          
        ];

        echo view('site/template/header', $data);
        echo view('site/home/index', $data);
        echo view('site/template/footer', $data);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
