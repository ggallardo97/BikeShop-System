<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carritos extends Migration{

    public function up(){

        $this->forge->addField([

            'idcarrito'          => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'horacarrito'  => [
                'type'     => 'TIME',
                'null'     => false
            ],
            'fechacarrito'   => [
                'type'       => 'DATE',
                'null'       => false
            ],
            'totalcarrito'   => [
                'type'       => 'FLOAT',
                'null'       => true
            ],
            'metododepago'   => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null'       => true
            ],
            'idcomprador'    => [
                'type'       => 'INT',
                'null'       => false
            ],
            'idjornadacarrito' => [
                'type'         => 'INT',
                'null'         => false
            ],
            'deletedcarrito' => [
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

        $this->forge->addKey('idcarrito', true);
        $this->forge->addForeignKey('idcomprador', 'clientes', 'idcliente', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('idjornadacarrito', 'inicios', 'idinicio', 'CASCADE', 'CASCADE');
        $this->forge->createTable('carritos');
    }

    public function down(){

        $this->forge->dropTable('carritos');
    }
}
