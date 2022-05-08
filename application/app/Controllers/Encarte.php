<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\ImoveisModel;
use App\Models\TipoModel;
use CodeIgniter\RESTful\ResourceController;

class Encarte extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        //if (is_null(session()->get('logged_user'))) {
        //return redirect()->to('admin');
        //}

        $imoveis = new ImoveisModel();
        $data = [
            'imoveis' => $imoveis->findAll(),
        ];
        echo view('administracao/template/header');
        echo view('administracao/encarte/index', $data);
        echo view('administracao/template/footer');
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $imoveis = new ImoveisModel();
        $tipos = new TipoModel();
        $categorias = new CategoriaModel();

        $data = [
            'tipos' => $tipos->findAll(),
            'categorias' => $categorias->findAll(),
            'imoveis' => $imoveis->find($id)
        ];
        echo view('administracao/template/header');
        echo view('administracao/encarte/show', $data);
        echo view('administracao/template/footer');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $tipos = new TipoModel();
        $categorias = new CategoriaModel();

        $data = [
            'tipos' => $tipos->findAll(),
            'categorias' => $categorias->findAll()
        ];
        echo view('administracao/template/header');
        echo view('administracao/encarte/new', $data);
        echo view('administracao/template/footer');
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

            $file = $this->request->getFile('imagem_principal');
            $file1 = $this->request->getFile('imagem_1');
            $file2 = $this->request->getFile('imagem_2');
            $file3 = $this->request->getFile('imagem_3');
            $file4 = $this->request->getFile('imagem_4');
            $file5 = $this->request->getFile('imagem_5');
            $file6 = $this->request->getFile('imagem_6');


            $descricao = $this->request->getPost('descricao');
            $categoria = $this->request->getPost('categoria');
            $codigo = $this->request->getPost('codigo');
            $tipo = $this->request->getPost('tipo');
            $preco = $this->request->getPost('preco');
            $bairro = $this->request->getPost('bairro');
            $cidade = $this->request->getPost('cidade');
            $estado = $this->request->getPost('estado');
            $tamanho = $this->request->getPost('tamanho');
            $quartos = $this->request->getPost('quartos');
            $banheiros = $this->request->getPost('banheiros');
            $vagas = $this->request->getPost('vagas');
            $observacao = $this->request->getPost('observacao');



          
                if ($file->isValid() && !$file->hasMoved()) {
                    $imagem_principal = $file->getRandomName();
                    $file->move('img/imoveis', $imagem_principal);
                }
            
          
                if ($file1->isValid() && !$file1->hasMoved()) {
                    $imagem_1 = $file1->getRandomName();
                    $file1->move('img/imoveis', $imagem_1);
                }
            
          
                if ($file2->isValid() && !$file2->hasMoved()) {
                    $imagem_2 = $file2->getRandomName();
                    $file2->move('img/imoveis', $imagem_2);
                }
            
          
                if ($file3->isValid() && !$file3->hasMoved()) {
                    $imagem_3 = $file3->getRandomName();
                    $file3->move('img/imoveis', $imagem_3);
                }
            
          
                if ($file4->isValid() && !$file4->hasMoved()) {
                    $imagem_4 = $file4->getRandomName();
                    $file4->move('img/imoveis', $imagem_4);
                }
            
          
                if ($file5->isValid() && !$file5->hasMoved()) {
                    $imagem_5 = $file5->getRandomName();
                    $file5->move('img/imoveis', $imagem_5);
                }
            
          
                if ($file6->isValid() && !$file6->hasMoved()) {
                    $imagem_6 = $file6->getRandomName();
                    $file6->move('img/imoveis', $imagem_6);
                }
            

            $data = [
                'descricao' => $descricao,
                'categoria' => $categoria,
                'codigo' => $codigo,
                'tipo' => $tipo,
                'imagem_principal' => $imagem_principal,
                'imagem_1' => $imagem_1,
                'imagem_2' => $imagem_2,
                'imagem_3' => $imagem_3,
                'imagem_4' => $imagem_4,
                'imagem_5' => $imagem_5,
                'imagem_6' => $imagem_6,
                'preco' => $preco,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'estado' => $estado,
                'tamanho' => $tamanho,
                'quartos' => $quartos,
                'banheiros' => $banheiros,
                'vagas' => $vagas,
                'observacao' => $observacao,
            ];
            $imoveis = new ImoveisModel();
            $imoveis->save($data);

            return redirect()->to(base_url('encarte'));

            //if (!$query) {
            //echo json_encode([
            //'success' => false,
            //'message' => 'Algo deu errado, tente novamente'
            //]);
            // } else {
            //echo json_encode([
            //'success' => true,
            //'message' => 'Configuração de pedido salvo com sucesso'
            // ]);
            //}
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function store($id = null)
    {
        //
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = true)
    {
        helper('form');
        if ($this->request->getMethod() === 'post') {

            $file = $this->request->getFile('imagem_principal');
            $file1 = $this->request->getFile('imagem_1');
            $file2 = $this->request->getFile('imagem_2');
            $file3 = $this->request->getFile('imagem_3');
            $file4 = $this->request->getFile('imagem_4');
            $file5 = $this->request->getFile('imagem_5');
            $file6 = $this->request->getFile('imagem_6');


            $descricao = $this->request->getPost('descricao');
            $categoria = $this->request->getPost('categoria');
            $codigo = $this->request->getPost('codigo');
            $tipo = $this->request->getPost('tipo');
            $preco = $this->request->getPost('preco');
            $bairro = $this->request->getPost('bairro');
            $cidade = $this->request->getPost('cidade');
            $estado = $this->request->getPost('estado');
            $tamanho = $this->request->getPost('tamanho');
            $quartos = $this->request->getPost('quartos');
            $banheiros = $this->request->getPost('banheiros');
            $vagas = $this->request->getPost('vagas');
            $observacao = $this->request->getPost('observacao');

            if ($file->isValid() && !$file->hasMoved()) {
                $imagem_principal = $file->getRandomName();
                $file->move('img/imoveis', $imagem_principal);
            }
            if ($file1->isValid() && !$file1->hasMoved()) {
                $imagem_1 = $file1->getRandomName();
                $file1->move('img/imoveis', $imagem_1);
            }
            if ($file2->isValid() && !$file2->hasMoved()) {
                $imagem_2 = $file2->getRandomName();
                $file2->move('img/imoveis', $imagem_2);
            }
            if ($file3->isValid() && !$file3->hasMoved()) {
                $imagem_3 = $file3->getRandomName();
                $file3->move('img/imoveis', $imagem_3);
            }
            if ($file4->isValid() && !$file4->hasMoved()) {
                $imagem_4 = $file4->getRandomName();
                $file4->move('img/imoveis', $imagem_4);
            }
            if ($file5->isValid() && !$file5->hasMoved()) {
                $imagem_5 = $file5->getRandomName();
                $file5->move('img/imoveis', $imagem_5);
            }
            if ($file6->isValid() && !$file6->hasMoved()) {
                $imagem_6 = $file6->getRandomName();
                $file6->move('img/imoveis', $imagem_6);
            }


            $data = [
                'descricao' => $descricao,
                'categoria' => $categoria,
                'codigo' => $codigo,
                'tipo' => $tipo,
                'imagem_principal' => $imagem_principal,
                'imagem_1' => $imagem_1,
                'imagem_2' => $imagem_2,
                'imagem_3' => $imagem_3,
                'imagem_4' => $imagem_4,
                'imagem_5' => $imagem_5,
                'imagem_6' => $imagem_6,
                'preco' => $preco,
                'bairro' => $bairro,
                'cidade' => $cidade,
                'estado' => $estado,
                'tamanho' => $tamanho,
                'quartos' => $quartos,
                'banheiros' => $banheiros,
                'vagas' => $vagas,
                'observacao' => $observacao,
            ];
            $imoveis = new ImoveisModel();
            $imoveis->update($id, $data);

            return redirect()->to(base_url('encarte'));

            //if (!$query) {
            //echo json_encode([
            //'success' => false,
            //'message' => 'Algo deu errado, tente novamente'
            //]);
            // } else {
            //echo json_encode([
            //'success' => true,
            //'message' => 'Configuração de pedido salvo com sucesso'
            // ]);
            //}
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = true)
    {

        $imoveis = new ImoveisModel();
        $imoveis->delete($id);

        return redirect()->to(base_url('encarte'));
    }
}
