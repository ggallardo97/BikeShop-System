 <!-- Modal-->
 <div class="modal fade" id="modalAumentarPrecio" role="dialog">
            <div class="modal-dialog mini" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Aumentar precio de todos los productos</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="aumentarPrecio-Form">
                            <div class="form-group">
                                <label for="porcentaje">Porcentaje</label>
                                <input type="number" class="form-control form-control-user2"
                                    name="porcentaje" id="porcentaje" min="1" value="1" required>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="botonAumentarPrecio">Aplicar</button>
                            </div>                                                                                                  
                        </form>
                    </div>
                </div>
            </div>
        </div>