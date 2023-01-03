 <!-- Modal-->
 <div class="modal fade" id="modalNuevaCategoria" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Añadir categoria</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="nuevaCategoria-Form">
                        <div class="form-group">
                            <label for="nombrecategoria">Nombre</label>
                            <input type="text" class="form-control form-control-user2"
                                name="nombrecategoria" id="nombrecategoria" required>
                        </div>         
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="botonNuevaCategoria" disabled>Agregar</button>
                        </div>                                                                                                         
                        </form>
                    </div>
                </div>
            </div>
        </div>