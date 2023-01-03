<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration{

    public function up(){

        $this->forge->addField([

            'idcategoria'        => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'nombrecategoria'    => [
                'type'           => 'VARCHAR',
                'constraint'     => '60',
                'null'           => false
            ],
            'deletedcategoria' => [
                'type'         => 'DATE',
                'null'         => true
            ],
            'created_at'     => [
                'type'       => 'DATE',
                'null'       => true
            ],
            'updated_at'     => [
                'type'       => 'DATE',
                'null'       => true
            ]
        ]);
        
        $this->forge->addKey('idcategoria', true);
        $this->forge->createTable('categorias');
    }

    public function down(){

        $this->forge->dropTable('categorias');
    }
}
