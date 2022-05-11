<?php


namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ImoveisModel;

class Dashboard extends ResourceController
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

        $locacao = new ImoveisModel();
        $venda = new ImoveisModel();
        $casa = new ImoveisModel();
        $apartamento = new ImoveisModel();
        $condominio = new ImoveisModel();
        $loja = new ImoveisModel();
        $terreno = new ImoveisModel();

        $locacao->where('categoria', 'Locação');
        $venda->where('categoria', 'Venda');
        $casa->where('tipo', 'Casa');
        $apartamento->where('tipo', 'Apartamento');
        $condominio->where('tipo', 'Condomínio');
        $loja->where('tipo', 'Loja');
        $terreno->where('tipo', 'Terreno');

        $data = [
            'locacao' => $locacao->findAll(),
            'venda' => $venda->findAll(),
            'casa' => $casa->findAll(),
            'apartamento' => $apartamento->findAll(),
            'condominio' => $condominio->findAll(),
            'loja' => $loja->findAll(),
            'terreno' => $terreno->findAll()
        ];
        echo view('administracao/template/header');
        echo view('administracao/dashboard/index', $data);
        echo view('administracao/template/footer');
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
