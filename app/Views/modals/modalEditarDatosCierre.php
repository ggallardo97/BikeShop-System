 <!-- Modal-->
 <div class="modal fade" id="modalEditarDatosCierre" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Agregar observaciones</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="editarCierre-Form">     
                        <div class="form-group">
                            <label for="observacionesEditar">Observaciones</label>
                            <textarea class="form-control form-control-user" 
                            name="observacionesEditar" id="observacionesEditar" cols="20" rows="2"></textarea>
                        </div>         
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="botonEditarCierre" disabled>Agregar</button>
                        </div>                                                                                                         
                        </form>
                    </div>
                </div>
            </div>
        </div>