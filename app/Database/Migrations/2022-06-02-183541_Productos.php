<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration{

    public function up(){

        $this->forge->addField([

            'idproducto'         => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'codigooriginal'     => [
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'null'           => false,
                'unique'         => true
            ],
            'codigoalfa'     => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
                'unique'     => true
            ],
            'descripcion'    => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => false
            ],
            'serie'          => [
                'type'       => 'VARCHAR',
                'constraint' => '70',
                'null'       => true
            ],
            'imagen'         => [
                'type'       => 'VARCHAR',
                'constraint' => '300',
                'null'       => true
            ],
            'idcategoriaprod'   => [
                'type'          => 'INT',
                'null'          => false
            ],
            'preciolista'    => [
                'type'       => 'FLOAT',
                'null'       => false
            ],
            'preciocontado'  => [
                'type'       => 'FLOAT',
                'null'       => false
            ],
            'stock'          => [
                'type'       => 'INT',
                'null'       => false
            ],
            'deletedproducto'=> [
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

        $this->forge->addKey('idproducto', true);
        $this->forge->addForeignKey('idcategoriaprod', 'categorias', 'idcategoria', 'CASCADE', 'CASCADE');
        $this->forge->createTable('productos');
    }

    public function down(){

        $this->forge->dropTable('productos');
    }
}
