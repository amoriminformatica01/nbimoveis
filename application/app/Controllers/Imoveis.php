<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ImoveisModel;
use App\Models\TipoModel;
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
        echo view('template/header');
        echo view('administracao/imoveis/index', $data);
        echo view('template/footer');
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
    public function novo()
    {
        $tipos = new TipoModel();
        $categorias = new CategoriaModel();

        $data = [
        'tipos'=>$tipos->findAll(),
        'categorias'=>$categorias->findAll()
        ];
        echo view('template/header');
        echo view('administracao/imoveis/novo',$data);
        echo view('template/footer');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        helper('form');
        if ($this->request->getMethod() === 'post') {

            $descricao = $this->request->getPost('descricao');
            $categoria = $this->request->getPost('categoria');
            $codigo = $this->request->getPost('codigo');
            $tipo = $this->request->getPost('tipo');
            $imagem = $this->request->getPost('imagem');
            $preco = $this->request->getPost('preco');
            $bairro = $this->request->getPost('bairro');
            $cidade = $this->request->getPost('cidade');
            $estado = $this->request->getPost('estado');
            $tamanho = $this->request->getPost('tamanho');
            $quartos = $this->request->getPost('quartos');
            $banheiros = $this->request->getPost('banheiros');
            $vagas = $this->request->getPost('vagas');
            $observacao = $this->request->getPost('observacao');

            $data = [
                'descricao' => $descricao,
                'categoria' => $categoria,
                'codigo' => $codigo,
                'tipo' => $tipo,
                'imagem' => $imagem,
                'preco' => $preco,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'estado' => $estado,
                'tamanho' => $tamanho,
                'quartos' => $quartos,
                'banheiros' => $banheiros,
                'vagas' => $vagas,
                'observacao' => $observacao
            ];
            $imoveis = new ImoveisModel();
          $query = $imoveis->insert($data);
          
            if (!$query) {
                echo json_encode([
                  'success' => false,
                  'message' => 'Algo deu errado, tente novamente'
                ]);
              } else {
                echo json_encode([
                  'success' => true,
                  'message' => 'Configuração de pedido salvo com sucesso'
                ]);
              }
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
