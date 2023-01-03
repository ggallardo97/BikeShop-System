
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
        
    <div class="d-sm-flex align-items-center justify-content-between" id="mainTitle">
        <h1 class="h3 mb-2 text-gray-800">Categorias</h1>
        <button class="d-sm-inline-block btn btn-sm btn-primary shadow-sm" 
        data-toggle="modal" data-target="#modalNuevaCategoria" id="agregarCategoria"><i
            class="fas fa-plus fa-sm text-white-50"></i> Agregar categoria</button>
    
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered nowrap hover" id="mini-dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php 
                                if($categorias){
                                    foreach($categorias as $row){   

                                        echo "<tr>";
                                        echo "<td>".$row['idcategoria']."</td>";
                                        echo "<td>".$row['nombrecategoria']."</td>";
                                        echo "<td><a data-toggle='tooltip' data-placement='top' title='Editar'>
                                        <button type='button' class='btn btn-primary btn-sm fa fa-edit' data-toggle='modal' id='editarDatosCategoria' 
                                            data-target='#modalEditarDatosCategoria' 
                                            data-idcategoria='".$row['idcategoria']."'
                                            data-categoria='".$row['nombrecategoria']."' 
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
    include('modals/modalNuevaCategoria.php');   
    include('modals/modalEditarDatosCategoria.php');   

?>