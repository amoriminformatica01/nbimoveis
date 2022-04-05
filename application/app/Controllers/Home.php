<?php

namespace App\Controllers;

use App\Models\ImoveisModel;

class Home extends BaseController
{
    public function index()
    {
        $imoveis = new ImoveisModel();
        $data = [
            'imoveis' => $imoveis->findAll(),
        ];
        echo view('template/header');
        echo view('site/index', $data);
        echo view('template/footer');
    }
}
