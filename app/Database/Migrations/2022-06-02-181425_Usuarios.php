<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration{

    public function up(){

        $this->forge->addField([

            'iduser'             => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null'       => false
            ],
            'userlastname'   => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null'       => false
            ],
            'email'          => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
                'unique'     => true
            ],
            'userpassword'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false
            ],
            'deleteduser'    => [
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
        
        $this->forge->addKey('iduser', true);
        $this->forge->createTable('usuarios');
        
    }

    public function down(){

        $this->forge->dropTable('usuarios');
        
    }
}
