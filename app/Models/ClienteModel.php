<?php 
namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model{
    
    protected $table              = 'clientes';
    protected $primaryKey         = 'idcliente';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['nombre','apellido','dni','cuil','telefono','emailcliente',
                                    'observacionescliente'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedcliente';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function agregarCliente($datosCliente){

        $this->insert($datosCliente);

        $idcliente = $this->getInsertID();

        return $idcliente;

    }

    public function obtenerClientes(){

        $clientes = $this->findAll();

        return $clientes;
    }

    public function obtenerDNIClientes(){

        $clientes = $this->select('dni')
                         ->where('idcliente !=', 1)
                         ->findAll();

        return $clientes;
    }

    public function obtenerIDClientePorDNI($dni){

        $cliente = $this->where('dni', $dni)
                        ->first();

        return $cliente['idcliente'];
    }

    public function editarCliente($idcliente, $datos){

        $this->set($datos)
             ->where('idcliente', $idcliente)
             ->update();

    }
    
}
