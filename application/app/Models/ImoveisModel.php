<?php

namespace App\Models;

use CodeIgniter\Model;

class ImoveisModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'imoveis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'descricao',
        'categoria',
        'codigo',
        'tipo',
        'imagem_principal',
        'imagem_1',
        'imagem_2',
        'imagem_3',
        'imagem_4',
        'imagem_5',
        'imagem_6',
        'preco',
        'bairro',
        'cidade',
        'estado',
        'tamanho',
        'quartos',
        'banheiros',
        'vagas',
        'observacao'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
