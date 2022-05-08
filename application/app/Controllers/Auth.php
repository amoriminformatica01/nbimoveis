<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        //if (session()->has('email')) {
            //return redirect()->to(base_url('auth'));
       // }

        echo view('administracao/template/header');
        echo view('administracao/auth/index');
        echo view('administracao/template/footer');
    }
    public function Login()
    {
        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            if (empty($email) && empty($password)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Informe o seu email e a sua senha'
                ]);
            } elseif (empty($email)) {
                echo json_encode([
                    'success' => false,
                    'message' => 'Informe o seu email'
                ]);
            } elseif (empty($password)) {
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
                    $checkPassword = Hash::check($password, $userInfo['password']);

                    if (!$checkPassword) {
                        echo json_encode([
                            'success' => false,
                            'message' => 'Usuário e/ou senha incorreto(s)'
                        ]);
                    } else {
                        session()->set('loggedUser', $userInfo['id']);
                        session()->set('email', $email);
                        session()->set('first_name', $userInfo['first_name']);
                        session()->set('last_name', $userInfo['last_name']);
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
