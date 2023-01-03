<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductoCarritoModel extends Model{
    
    protected $table              = 'productoscarrito';
    protected $primaryKey         = 'idproductocarrito';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['idcarritocompra','idproductocompra','cantidad','subtotal'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedproductocarrito';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function agregarProductoCarrito($datosProductoCarrito){

        $this->insert($datosProductoCarrito);

    }

    public function obtenerProductosCarrito($idcarrito){

        $productos = $this->join('productos', 'productos.idproducto = productoscarrito.idproductocompra')
                          ->where('idcarritocompra', $idcarrito)
                          ->findAll();
    
        return $productos;
        
    }

    public function obtenerTotalVentas(){

        $total = $this->select('idproductocompra')
                      ->countAll();
    
        return $total;
        
    }

    public function obtenerProductosMasVendidos(){

        $productos = $this->select('descripcion, count(idproductocompra) as total')
                          ->join('productos', 'productos.idproducto = productoscarrito.idproductocompra')
                          ->groupBy('descripcion')
                          ->orderBy('count(idproductocompra)', 'DESC')
                          ->limit(6)
                          ->find();
    
        return $productos;
        
    }
    
}
