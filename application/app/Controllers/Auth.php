<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if (!is_null(session()->get('loggedUser'))) {
            return redirect()->to('dashboard');
          }
        echo view('administracao/template/header');
        echo view('administracao/auth/index');
        echo view('administracao/template/footer');
    }
    public function Login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $senha = $this->request->getPost('senha');

            if (empty($email) && empty($senha)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Informe o seu email e a sua senha'
                ]);
            } elseif (empty($email)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Informe o seu email'
                ]);
            } elseif (empty($senha)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Informe a sua senha'
                ]);
            } else {
                $userModel = new UserModel();

                $userInfo = $userModel->where('email', $email)->first();

                if (!$userInfo) {
                    echo json_encode([
                        'success' => false,
                        'message' => 'Usuário e/ou senha incorreto(s)'
                    ]);
                } else {
                    $checkPassword = Hash::check($senha, $userInfo['senha']);

                    if (!$checkPassword) {
                        echo json_encode([
                            'success' => false,
                            'message' => 'Usuário e/ou senha incorreto(s)'
                        ]);
                    } else {
                        session()->set('loggedUser', $userInfo['id']);
                        session()->set('email', $email);
                        session()->set('nome', $userInfo['nome']);
                        session()->set('sobrenome', $userInfo['sobrenome']);
                        echo json_encode([
                            'success' => true,
                            'message' => 'Login efetuado com sucesso, aguarde...'
                        ]);
                    }
                }
            }
        }
    }


    public function Logout()
    {
        helper('form');
        $session = session();
        $session->destroy();


        if ($session) {
            echo json_encode([
                'success' => true,
                'message' => 'Deslogado com sucesso, aguarde...'
            ]);
        }
        return redirect()->to(base_url('auth'));
    }
}
