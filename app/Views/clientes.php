
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>CUIL</th>
                        <th>Apellido(s)</th>
                        <th>Nombre(s)</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Observaciones</th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if($clientes){
                        foreach($clientes as $row){

                            echo "<tr>";

                            echo "<td>".$row['dni']."</td>";
                            echo "<td>".$row['cuil']."</td>";
                            echo "<td>".$row['apellido']."</td>";
                            echo "<td>".$row['nombre']."</td>";
                            echo "<td>".$row['telefono']."</td>";
                            echo "<td>".$row['emailcliente']."</td>";
                            echo "<td>".$row['observacionescliente']."</td>";
                            echo "<td><a data-toggle='tooltip' data-placement='top' title='Editar'>
                                <button type='button' class='btn btn-primary btn-sm fa fa-edit' data-toggle='modal' id='editarDatosCliente' 
                                data-target='#modalEditarDatosCliente' 
                                data-idcliente='".$row['idcliente']."'
                                data-dni='".$row['dni']."' 
                                data-cuil='".$row['cuil']."' 
                                data-nombre='".$row['nombre']."' 
                                data-apellido='".$row['apellido']."' 
                                data-telefono='".$row['telefono']."' 
                                data-emailcliente='".$row['emailcliente']."' 
                                data-observacionescliente='".$row['observacionescliente']."'
                                ></button>
                            </a></td>";

                            echo "</tr>";
                        } 
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
    if($clientes){

        include('modals/modalEditarDatosCliente.php');

    }
?>
