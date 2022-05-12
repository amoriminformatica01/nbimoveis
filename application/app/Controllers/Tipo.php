<?php

namespace App\Controllers;

use App\Models\TipoModel;
use CodeIgniter\RESTful\ResourceController;

class Tipo extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        $tipos = new TipoModel();
        $data = [
            'tipos' => $tipos->findAll(),
        ];
        echo view('administracao/template/header');
        echo view('administracao/tipo/index', $data);
        echo view('administracao/template/footer');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        $tipos = new TipoModel();
        $data = [
            'tipos' => $tipos->find($id),
        ];
        echo view('administracao/template/header');
        echo view('administracao/tipo/show', $data);
        echo view('administracao/template/footer');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        echo view('administracao/template/header');
        echo view('administracao/tipo/new');
        echo view('administracao/template/footer');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $tipo = $this->request->getPost('tipo');
            $data = [
                'tipo' => $tipo,
            ];
            $tipos = new TipoModel();
            $tipos->insert($data);
            return redirect()->to(base_url('tipo'));
        }
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
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        if ($this->request->getMethod() === 'post') {

            $tipo = $this->request->getPost('tipo');
            $data = [
                'tipo' => $tipo,
            ];
            $tipos = new TipoModel();
            $tipos->update($id, $data);
            return redirect()->to(base_url('tipo'));
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        if (!session()->has('email')) {
            return redirect()->to(base_url('auth'));
        }
        $tipos = new TipoModel();
        $tipos->delete($id);
        return redirect()->to(base_url('tipo'));
    }
}
