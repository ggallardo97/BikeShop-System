
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Cierres diarios</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora inicio</th>
                        <th>Hora fin</th>
                        <th>Total</th>
                        <th>Observaciones</th>
                        <th>Ventas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if($cierres){
                        foreach($cierres as $row){

                            echo "<tr>";

                            echo "<td>".date('d/m/Y', strtotime($row['fechainicio']))."</td>";
                            echo "<td>".$row['horainicio']."</td>";
                            echo "<td>".$row['horacierre']."</td>";
                            echo "<td>$".number_format($row['totalcierre'], 2, ',', '.')."</td>";
                            echo "<td>".$row['observacionescierre']."</td>";
                            echo "<td>
                                <button type='button' class='btn btn-primary btn-sm' id='carritosCierre' 
                                    data-toggle='modal' data-target='#modalCarritos' 
                                    data-idinicio='".$row['idinicio']."'
                                    data-fecha='".date('d/m/Y', strtotime($row['fechainicio']))."'>
                                    Ver</button>
                                </td>";
                            echo "<td>
                                <a data-toggle='tooltip' data-placement='top' title='Agregar observaciones'>
                                    <button type='button' class='btn btn-primary btn-sm fa fa-edit' data-toggle='modal' id='editarDatosCierre' 
                                    data-target='#modalEditarDatosCierre' 
                                    data-idinicio='".$row['idinicio']."'
                                    data-observaciones='".$row['observacionescierre']."'
                                    ></button>
                                </a>
                                </td>";
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
    if($cierres){

        include('modals/modalCarritos.php');
        include('modals/modalEditarDatosCierre.php');

    }
?>
