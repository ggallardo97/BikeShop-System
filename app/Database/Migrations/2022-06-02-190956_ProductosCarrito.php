<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductosCarrito extends Migration{

    public function up(){

        $this->forge->addField([

            'idproductocarrito'  => [
                'type'           => 'SERIAL',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false
            ],
            'idcarritocompra'    => [
                'type'           => 'INT',
                'null'           => false
            ],
            'idproductocompra'   => [
                'type'           => 'INT',
                'null'           => false
            ],
            'cantidad'   => [
                'type'   => 'INT',
                'null'   => false
            ],
            'subtotal'    => [
                'type'    => 'FLOAT',
                'null'    => false
            ],
            'deletedproductocarrito'  => [
                'type'                => 'DATE',
                'null'                => true
            ],
            'created_at'   => [
                'type'     => 'DATE',
                'null'     => true
            ],
            'updated_at'   => [
                'type'     => 'DATE',
                'null'     => true
            ]
        ]);

        $this->forge->addKey('idproductocarrito', true);
        $this->forge->addForeignKey('idcarritocompra', 'carritos', 'idcarrito', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('idproductocompra', 'productos', 'idproducto', 'CASCADE', 'CASCADE');
        $this->forge->createTable('productoscarrito');
    }

    public function down(){

        $this->forge->dropTable('productoscarrito');
    }
}

