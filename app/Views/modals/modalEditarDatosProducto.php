 <!-- Modal-->
 <div class="modal fade" id="modalEditarDatosProducto" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Editar datos del producto</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="editarProducto-Form">
                            <div class="form-group">
                                <label for="codigooriginalEditar">Codigo original</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="codigooriginalEditar" id="codigooriginalEditar" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="codigoalfaEditar">Codigo alfa</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="codigoalfaEditar" id="codigoalfaEditar" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="serieEditar">Serie</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="serieEditar" id="serieEditar">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descripcionEditar">Descripcion</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="descripcionEditar" id="descripcionEditar" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="preciolistaEditar">Precio de lista</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="preciolistaEditar" id="preciolistaEditar" required>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="preciocontadoEditar">Precio contado</label>
                                    <input type="text" class="form-control form-control-user2"
                                        name="preciocontadoEditar" id="preciocontadoEditar" required>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="stockEditar">Stock</label>
                                    <input type="number" class="form-control form-control-user2"
                                        name="stockEditar" id="stockEditar" min="0" required>
                                </div> 
                            </div>  
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="botonEditarProducto" disabled>Editar</button>
                            </div>                                                                                                  
                        </form>
                    </div>
                </div>
            </div>
        </div>