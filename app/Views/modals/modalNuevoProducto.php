 <!-- Modal-->
 <div class="modal fade" id="modalNuevoProducto" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Añadir producto</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="nuevoProducto-Form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="codigooriginal">Codigo original</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="codigooriginal" id="codigooriginal" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="codigoalfa">Codigo alfa</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="codigoalfa" id="codigoalfa" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="serie">Serie</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="serie" id="serie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="descripcion" id="descripcion" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="imagen">Imagen</label>
                                    <input type="file" class="form-control form-control-user2"
                                        name="imagen" id="imagen">
                                </div>
                                <div class="col-sm-6" id="cuil-div">
                                    <label for="categoria">Categoria</label>
                                    <select name="categoria" id="categoria" class="form-control form-control-user2" required>
                                        <?php
                                            foreach($categorias as $cat){

                                                echo '<option value="'.$cat['idcategoria'].'">'.$cat['nombrecategoria'].'</option>';

                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="preciocontado">Precio de contado</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="preciocontado" id="preciocontado" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="preciolista">Precio de lista</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="preciolista" id="preciolista" value="" required>
                                </div>                         
                            </div> 
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"> 
                                    <label for="stock">Stock</label>
                                        <input type="number" class="form-control form-control-user2"
                                            name="stock" id="stock" min="0" required>
                                </div> 
                            </div> 
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="botonNuevoProducto" disabled>Agregar</button>
                            </div>                                                                                                  
                        </form>
                    </div>
                </div>
            </div>
        </div>