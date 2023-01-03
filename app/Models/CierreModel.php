<?php 
namespace App\Models;

use CodeIgniter\Model;

class CierreModel extends Model{
    
    protected $table              = 'cierres';
    protected $primaryKey         = 'idcierre';
    protected $useAutoIncrement   = true;
    protected $returnType         = 'array';
    protected $useSoftDeletes     = true;
    protected $allowedFields      = ['idiniciojornada','horacierre','fechacierre','totalcierre',
                                    'observacionescierre'];
    protected $useTimestamps      = true;
    protected $createdField       = 'created_at';
    protected $updatedField       = 'updated_at';
    protected $deletedField       = 'deletedcierre';
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function finalizarJornada($idinicio, $totalcierre){

        $datosCierre = [

            'idiniciojornada' => $idinicio,
            'horacierre'      => date("H:i:s", time()),
            'fechacierre'     => date('Y-m-d'),
            'totalcierre'     => $totalcierre
        ];

        $this->insert($datosCierre);

    }

    public function obtenerCierres(){

        $cierres = $this->join('inicios', 'inicios.idinicio = cierres.idiniciojornada')
                        ->findAll();

        return $cierres;

    }

    public function agregarObservaciones($idinicio, $data){

        $this->set('observacionescierre', $data)
             ->where('idiniciojornada', $idinicio)
             ->update();

    }
    
}
