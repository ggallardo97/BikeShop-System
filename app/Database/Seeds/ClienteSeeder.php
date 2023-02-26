<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClienteSeeder extends Seeder{

    public function run(){

        $anonimo = [
            'nombre'       => 'Anonimo',
            'apellido'     => 'Anonimo',
            'dni'          => '00000000',
            'cuil'         => '00000000000',
            'telefono'     => '',
            'emailcliente' => '',
            'observacionescliente' => ''
        ];

        $this->db->table('clientes')->insert($anonimo);
        
    }

}
