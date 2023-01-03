
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
        
    <div class="d-sm-flex align-items-center justify-content-between" id="mainTitle">
        <h1 class="h3 mb-2 text-gray-800">Productos</h1>
        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" 
        data-toggle="modal" data-target="#modalAumentarPrecio" id="aumentarPrecio"><i
            class="fas fa-dollar fa-sm text-white-50"></i> Aumentar precio</button>
        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" 
        data-toggle="modal" data-target="#modalNuevoProducto" id="agregarProducto"><i
            class="fas fa-plus fa-sm text-white-50"></i> Agregar producto</button>
    
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Codigo alfa</th>
                            <th>Descripcion</th>
                            <th>Serie</th>
                            <th>Imagen</th>
                            <th>Categoria</th>
                            <th>Precio de contado</th>
                            <th>Precio de lista</th>
                            <th>Stock</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                if($productos){
                                    foreach($productos as $row){   

                                        $disabled = '';

                                        echo "<tr>";
                                        echo "<td>".$row['codigooriginal']."</td>";
                                        echo "<td>".$row['codigoalfa']."</td>";
                                        echo "<td>".$row['descripcion']."</td>";
                                        echo "<td>".$row['serie']."</td>";

                                        if($row['imagen'] != '') echo "<td><img class='img-producto' src='".base_url('/assets/uploads/'.$row['imagen'])."'></td>";
                                        else echo "<td><img class='img-producto' src='".base_url('/assets/img/noImage.jpg')."'></td>";
                                        
                                        echo "<td>".$row['nombrecategoria']."</td>";
                                        echo "<td>$".number_format($row['preciocontado'], 2, ',', '.')."</td>";
                                        echo "<td>$".number_format($row['preciolista'], 2, ',', '.')."</td>";

                                        if($row['stock'] > 0) echo "<td>".$row['stock']."</td>"; 
                                        else{
                                            echo "<td><button type='button' class='btn btn-danger btn-sm' id='sinStock'
                                            disabled>SIN STOCK</button></td>";
                                            $disabled = 'disabled';
                                        }

                                        echo "<td><a data-toggle='tooltip' data-placement='top' title='Agregar al carrito'>
                                                    <button type='button' class='btn btn-primary btn-sm' data-toggle='modal' 
                                                        id='agregarAlCarrito' 
                                                        data-idproducto='".$row['idproducto']."' 
                                                        data-codigoalfa='".$row['codigoalfa']."' 
                                                        data-descripcion='".$row['descripcion']."' 
                                                        data-precioc='".$row['preciocontado']."' 
                                                        data-preciot='".$row['preciolista']."' 
                                                        data-stock='".$row['stock']."'
                                                        data-target='#modalAgregarAlCarrito' ".$disabled.">
                                                        <i class='fa fa-cart-arrow-down'></i>
                                                    </button>
                                                </a>
                                                <a data-toggle='tooltip' data-placement='top' title='Editar'>
                                                <button type='button' class='btn btn-primary btn-sm fa fa-edit' data-toggle='modal' id='editarDatosProducto' 
                                                    data-target='#modalEditarDatosProducto' 
                                                    data-idproducto='".$row['idproducto']."'
                                                    data-codigooriginal='".$row['codigooriginal']."' 
                                                    data-codigoalfa='".$row['codigoalfa']."' 
                                                    data-serie='".$row['serie']."' 
                                                    data-descripcion='".$row['descripcion']."' 
                                                    data-preciolista='".$row['preciolista']."' 
                                                    data-preciocontado='".$row['preciocontado']."'
                                                    data-stock='".$row['stock']."'
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
    include('modals/modalNuevoProducto.php');   
    include('modals/modalAumentarPrecio.php');   
    include('modals/modalEditarDatosProducto.php');   
    include('modals/modalAgregarAlCarrito.php');   

?>