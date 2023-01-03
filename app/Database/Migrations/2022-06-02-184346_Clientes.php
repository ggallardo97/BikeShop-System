<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration{

    public function up(){

        $this->forge->addField([

            'idcliente'          => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'nombre'          => [
                'type'        => 'VARCHAR',
                'constraint'  => '100',
                'null'        => false
            ],
            'apellido'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false
            ], 
            'dni'            => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => false
            ],
            'cuil'           => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
                'null'       => true
            ],
            'telefono'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true
            ],
            'emailcliente'   => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true
            ],
            'observacionescliente'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '200',
                'null'              => true
            ],
            'deletedcliente' => [
                'type'       => 'DATE',
                'null'       => true
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

        $this->forge->addKey('idcliente', true);
        $this->forge->createTable('clientes');
    }

    public function down(){

        $this->forge->dropTable('clientes');
    }
}
