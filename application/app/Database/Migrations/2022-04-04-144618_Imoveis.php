<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Imoveis extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'descricao' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],

            'categoria'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'codigo'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'tipo'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'imagem'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'preco'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'bairro'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'cidade'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'estado'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'tamanho'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'quartos'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'banheiros'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'vagas'=> [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('imoveis');
    }

    public function down()
    {
        //
    }
}
