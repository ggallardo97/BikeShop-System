<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cierres extends Migration{

    public function up(){

        $this->forge->addField([

            'idcierre'           => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'idiniciojornada'   => [
                'type'          => 'INT',
                'null'          => false
            ],
            'horacierre'   => [
                'type'     => 'TIME',
                'null'     => false
            ],
            'fechacierre'    => [
                'type'       => 'DATE',
                'null'       => false
            ],
            'totalcierre'    => [
                'type'       => 'FLOAT',
                'null'       => false
            ],
            'observacionescierre'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '200',
                'null'              => true
            ],
            'deletedcierre'  => [
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

        $this->forge->addKey('idcierre', true);
        $this->forge->addForeignKey('idiniciojornada', 'inicios', 'idinicio', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cierres');
    }

    public function down(){

        $this->forge->dropTable('cierres');
    }
}

