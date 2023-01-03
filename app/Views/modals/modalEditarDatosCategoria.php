 <!-- Modal-->
 <div class="modal fade" id="modalEditarDatosCategoria" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Editar datos de la categoria</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="editarCategoria-Form">
                        <div class="form-group">
                            <label for="nombrecategoriaEditar">Nombre</label>
                            <input type="text" class="form-control form-control-user2"
                                name="nombrecategoriaEditar" id="nombrecategoriaEditar" required>
                        </div>         
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="botonEditarCategoria" disabled>Editar</button>
                        </div>                                                                                                         
                        </form>
                    </div>
                </div>
            </div>
        </div>