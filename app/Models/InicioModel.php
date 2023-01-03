<?php 
namespace App\Models;

use CodeIgniter\Model;

class InicioModel extends Model{
    
    protected $table              = 'inicios';
    protected $primaryKey         = 'idinicio';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['horainicio','fechainicio'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedinicio';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function iniciarJornada(){

        $datosInicio = [

            'horainicio'  => date("H:i:s", time()),
            'fechainicio' => date('Y-m-d')
        ];

        $this->insert($datosInicio);

        $idinicio = $this->getInsertID();

        return $idinicio;

    }

    
}
