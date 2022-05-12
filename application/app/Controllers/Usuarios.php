<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Libraries\Hash;
use CodeIgniter\RESTful\ResourceController;

class Usuarios extends ResourceController
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
        $UserModel = new UserModel();

        $data = [
            'UserModel' => $UserModel->paginate(10),
            'pager' => $UserModel->pager,
        ];
        echo view('administracao/template/header',);
        echo view('administracao/usuarios/index', $data);
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
        $UserModel = new UserModel();

        $data = [
            'UserModel' => $UserModel->find($id),
        ];
        echo view('administracao/template/header');
        echo view('administracao/usuarios/show',$data);
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
        echo view('administracao/usuarios/new');
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
            $nome = $this->request->getPost('nome');
            $sobrenome = $this->request->getPost('sobrenome');
            $email = $this->request->getPost('email');
            $senha = $this->request->getPost('senha');
            $telefone = $this->request->getPost('telefone');
            $observacao = $this->request->getPost('observacao');
            $created_at = $this->request->getPost('created_at');
            $updated_at = $this->request->getPost('updated_at');
            $data = [
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'senha' => Hash::make($senha),
                'telefone' => $telefone,
                'observacao' => $observacao,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ];
            $UserModel = new UserModel();
            $UserModel->insert($data);
            return redirect()->to(base_url('usuarios'));
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
        helper('form');
        if ($this->request->getMethod() === 'post') {
            $nome = $this->request->getPost('nome');
            $sobrenome = $this->request->getPost('sobrenome');
            $email = $this->request->getPost('email');
            $senha = $this->request->getPost('senha');
            $telefone = $this->request->getPost('telefone');
            $observacao = $this->request->getPost('observacao');
            $created_at = $this->request->getPost('created_at');
            $updated_at = $this->request->getPost('updated_at');
            $data = [
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'senha' => $senha,
                'telefone' => $telefone,
                'observacao' => $observacao,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
            ];
            $UserModel = new UserModel();
            $UserModel->update($id, $data);
            return redirect()->to(base_url('usuarios'));
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
        $UserModel = new UserModel();
        $UserModel->delete($id);
        return redirect()->to(base_url('usuarios'));
    }
}
