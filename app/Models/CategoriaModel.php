<?php 
namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model{
    
    protected $table              = 'categorias';
    protected $primaryKey         = 'idcategoria';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['nombrecategoria'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedcategoria';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function crearCategoria($datosCategoria){

        $this->insert($datosCategoria);

    }

    public function obtenerCategorias(){

        $categorias = $this->findAll();

        return $categorias;
    }
    
    public function editarCategoria($idcategoria, $datos){

        $this->set($datos)
             ->where('idcategoria', $idcategoria)
             ->update();

    }
}
