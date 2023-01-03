
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
        
    <div class="d-sm-flex align-items-center justify-content-between" id="mainTitle">
        <h1 class="h3 mb-2 text-gray-800">Carrito de compras</h1>
        <?php 
        if(isset($_SESSION['carrito']) && isset($_COOKIE['working']) && isset($_COOKIE['key2'])){ 
        ?>
        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" 
            data-toggle="modal" data-target="#modalRegistrarCompra" id="registrarCompra"><i
            class="fas fa-cash-register fa-sm text-white-50"></i> Registrar venta</button>
        <?php } ?>
    </div>
    
    <div class="card shadow mb-4">
        <?php if(isset($_SESSION['carrito'])){ ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" id="totalCarritoC"></h6>
            <h6 class="m-0 font-weight-bold text-primary" id="totalCarritoT"></h6>
        </div>
        <?php } ?> 
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                    <div class='spinner'>
                        <div></div>
                        <div></div>
                    </div>
                    <thead>
                        <tr>
                            <th>Codigo alfa</th>
                            <th>Descripcion</th>
                            <th>Cantidad</th>
                            <th>Precio Contado</th>
                            <th>Subtotal Contado</th>
                            <th>Precio Lista</th>
                            <th>Subtotal Lista</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                if(isset($_SESSION['carrito'])){

                                    $totalc = 0;
                                    $totalt = 0;

                                    foreach($_SESSION['carrito'] as $key => $row){   

                                        echo "<tr>";
                                        echo "<td>".$row['codigoalfa']."</td>";
                                        echo "<td>".$row['descripcion']."</td>";
                                        echo "<td>".$row['cantidad']."</td>";
                                        echo "<td>$".number_format($row['precioc'], 2, ',', '.')."</td>";
                                        echo "<td>$".number_format($row['precioc'] * $row['cantidad'], 2, ',', '.')."</td>";
                                        echo "<td>$".number_format($row['preciot'], 2, ',', '.')."</td>";
                                        echo "<td>$".number_format($row['preciot'] * $row['cantidad'], 2, ',', '.')."</td>";
                                        echo "<td>
                                            <a data-toggle='tooltip' data-placement='top' title='Quitar'>
                                                <button type='button' class='btn btn-danger btn-sm' id='quitarProducto' 
                                                    data-idproducto='".$key."'>
                                                    <i class='fa fa-trash-can'></i></button>
                                            </a>
                                            </td>";
                                        echo "</tr>";

                                        $totalc += ($row['precioc'] * $row['cantidad']);
                                        $totalt += ($row['preciot'] * $row['cantidad']);
                                    }
                                    echo "<button type='hidden' id='botonTotal' style='display: none;' 
                                        data-totalc='".number_format($totalc, 2, ',', '.')."'
                                        data-totalt='".number_format($totalt, 2, ',', '.')."'></button>";
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
  include('modals/modalRegistrarCompra.php');  

?>