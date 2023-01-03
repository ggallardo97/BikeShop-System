<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inicios extends Migration{

    public function up(){

        $this->forge->addField([

            'idinicio'           => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'horainicio'   => [
                'type'     => 'TIME',
                'null'     => false
            ],
            'fechainicio'    => [
                'type'       => 'DATE',
                'null'       => false
            ],
            'deletedinicio'  => [
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

        $this->forge->addKey('idinicio', true);
        $this->forge->createTable('inicios');
    }

    public function down(){

        $this->forge->dropTable('inicios');
    }
}

