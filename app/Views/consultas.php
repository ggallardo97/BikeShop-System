<div class="container-fluid">
        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Consultas</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>Descripcion</th>
                          <th>Accion</th>
                        </tr>
                    </thead>
                        <tbody>
                          <tr>
                            <td>Docentes por Facultad</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalDocentesporFacultad">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>
                          <tr>
                            <td>Docentes por Carrera</td>   
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalDocentesporCarrera" id="consultaDocentesCarrera">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td> 
                          </tr>
                          <tr>
                            <td>Contratados por funcion</td>   
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalContratadosPorFuncion" id="consultaContratadosFuncion">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td> 
                          </tr>
                          <tr>
                            <td>Docentes por Asignatura</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalDocentesporAsignatura" id="consultaDocentesAsignatura">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>      
                          <tr>
                            <td>Docentes por Categoria</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalDocentesporCategoria">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>          
                          <tr>
                            <td>Personal Activo</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalActivo">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>      
                          <tr>
                            <td>Personal por Situacion revista</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalporSitRevista">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>      
                          <tr>
                            <td>Personal por Modalidad</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalporModalidad">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>     
                          <tr>
                            <td>Personal por Condicion</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalporCondicion">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>      
                          <tr>
                            <td>Personal por Dedicacion</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalporDedicacion">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>          
                          <tr>
                            <td>Personal Vencimiento</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPersonalporVencimiento">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>          
                          <tr>
                            <td>PAU por Categoria</td> 
                            <td><button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                  data-toggle="modal" data-target="#modalPauporCategoria">Ver <i
                                  class="fas fa-arrow-right fa-sm text-white-50"></i></button>
                            </td>   
                          </tr>          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php 
    
    include('modalsConsultas/modalContratadosporFuncion.php');
    include('modalsConsultas/modalDocentesporFacultad.php');
    include('modalsConsultas/modalDocentesporCarrera.php');
    include('modalsConsultas/modalDocentesporAsignatura.php');
    include('modalsConsultas/modalDocentesporCategoria.php');
    include('modalsConsultas/modalPersonalporDedicacion.php');
    include('modalsConsultas/modalPersonalporCondicion.php');
    include('modalsConsultas/modalPersonalporVencimiento.php');
    include('modalsConsultas/modalPersonalporModalidad.php');
    include('modalsConsultas/modalPersonalporSituacionRevista.php');
    include('modalsConsultas/modalPersonalActivo.php');
    include('modalsConsultas/modalPauporCategoria.php');

?>
