
    <!-- Begin Page Content -->
<div class="container-fluid">

        <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Apellido(s)</th>
                <th>Nombre(s)</th>
                <th>Email</th>
                <th>Perfil de acceso</th>
                <th>Estado</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($users as $row){

                    echo "<tr>";

                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['userlastname']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".strtoupper($row['category'])."</td>";
                    
                    if(is_null($row['deletedu'])) echo "<td>
                            <a data-toggle='tooltip' data-placement='top' title='Cambiar estado'>
                                <button type='button' data-id='". $row['iduser'] ."' class='btn btn-success btn-sm' id='botonState'>Activo</button>
                                </a>
                            </td>";
                    else echo "<td>
                            <a data-toggle='tooltip' data-placement='top' title='Cambiar estado'>
                                <button type='button' data-id='". $row['iduser'] ."' class='btn btn-danger btn-sm' id='botonState'>Inactivo</button>
                            </a>
                            </td>";
                    echo "<td>
                        <a data-toggle='tooltip' data-placement='top' title='Editar'>
                            <button type='button' class='btn btn-primary btn-sm fa fa-edit' data-toggle='modal' 
                            data-id='".$row['iduser']."' data-name='".$row['username']."' data-lastname='".$row['userlastname']."' data-email='".$row['email']."' 
                            data-category='".$row['category']."' id='editarDatosUser' data-target='#modalFormEditarDU'></button>
                        </a>
                        </td>";

                    echo "</tr>";
                }             
            ?>                       
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
    if($users){
        
        include('modals/modalEditarDatosUser.php'); 
    }
?>
