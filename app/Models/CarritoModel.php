<?php 
namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model{
    
    protected $table              = 'carritos';
    protected $primaryKey         = 'idcarrito';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['horacarrito','fechacarrito','totalcarrito','metododepago','idcomprador','idjornadacarrito'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedcarrito';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function registrarCarrito($mediodepago, $total, $idcliente, $idinicio){

        $datosCarrito = [

            'horacarrito'      => date("H:i:s", time()),
            'fechacarrito'     => date('Y-m-d'),
            'totalcarrito'     => $total,
            'metododepago'     => $mediodepago,
            'idcomprador'      => $idcliente,
            'idjornadacarrito' => $idinicio
        ];

        $this->insert($datosCarrito);

        $idcarrito = $this->getInsertID();

        return $idcarrito;

    }

    public function obtenerCarritos(){

        $carritos = $this->join('clientes', 'clientes.idcliente = carritos.idcomprador')
                         ->findAll();

        return $carritos;
    }

    public function obtenerCarritosPorCierre($idinicio){

        $carritos = $this->join('clientes', 'clientes.idcliente = carritos.idcomprador')
                         ->where('idjornadacarrito', $idinicio)
                         ->findAll();

        return $carritos;
    }

    public function obtenerTotalCarritoCierre($idinicio){

        $total = $this->select('sum(totalcarrito) as resultado')
                      ->where('idjornadacarrito', $idinicio)
                      ->first();

        if($total['resultado']) return $total['resultado'];
        else return 0;

    }

    public function obtenerTotalVentasPorMes(){

        $ventas = $this->select('extract(month from fechacarrito) as mes, sum(totalcarrito) as total')
                       ->where('extract(year from fechacarrito)', date('Y'))
                       ->groupBy('extract(month from fechacarrito)')
                       ->orderBy('extract(month from fechacarrito)')
                       ->find();

        return $ventas;

    }
    
}
