
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ventas</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Productos</th>
                        <th>Total</th>
                        <th>Forma de pago</th>
                        <th>Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if($carritos){
                        foreach($carritos as $row){

                            echo "<tr>";

                            echo "<td>".date('d/m/Y', strtotime($row['fechacarrito']))."</td>";
                            echo "<td>".$row['horacarrito']."</td>";
                            echo "<td>
                                <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' id='productosCarrito' 
                                    data-target='#modalProductosCarrito' 
                                    data-idcarrito='".$row['idcarrito']."'
                                >Ver</button>
                            </td>";
                            echo "<td>$".number_format($row['totalcarrito'], 2, ',', '.')."</td>";
                            echo "<td>".$row['metododepago']."</td>";

                            if($row['apellido'] !== 'Anonimo') echo "<td>".$row['apellido'].', '.$row['nombre']."</td>";
                            else echo "<td>".$row['nombre']."</td>";

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
    if($carritos){

        include('modals/modalProductosCarrito.php');

    }
?>
