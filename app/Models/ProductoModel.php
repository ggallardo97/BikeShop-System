<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model{
    
    protected $table              = 'productos';
    protected $primaryKey         = 'idproducto';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['codigooriginal','codigoalfa','descripcion','serie','imagen',
                                    'idcategoriaprod','preciolista','preciocontado','stock'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedproducto';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function crearProducto($datosProducto){

        $this->insert($datosProducto);

    }

    public function obtenerProductos(){

        $productos = $this->join('categorias', 'categorias.idcategoria = productos.idcategoriaprod')
                          ->findAll();

        return $productos;

    }

    public function obtenerProductosXAgotarse(){

        $stockMinimo = 5;
        $productos   = $this->select('codigoalfa, descripcion, stock')
                            ->where('stock <= ', $stockMinimo)
                            ->limit(15)
                            ->findAll();

        return $productos;

    }

    public function obtenerPreciosProductos(){

        $productos = $this->select('idproducto, preciolista, preciocontado')
                          ->findAll();

        return $productos;

    }

    public function editarProducto($idproducto, $datos){

        $this->set($datos)
             ->where('idproducto', $idproducto)
             ->update();

    }

    public function incrementarPreciosLista($idproducto, $nuevoprecio){

        $this->set('preciolista', $nuevoprecio)
             ->where('idproducto', $idproducto)
             ->update();

    }

    public function incrementarPreciosContado($idproducto, $nuevoprecio){

        $this->set('preciocontado', $nuevoprecio)
             ->where('idproducto', $idproducto)
             ->update();

    }
    
}
