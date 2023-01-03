 <!-- Modal-->
 <div class="modal fade" id="modalEditarDatosCliente" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Editar datos del cliente</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="clienteEditar-Form">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nombreEditar">Nombre(s)</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="nombreEditar" id="nombreEditar" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="apellidoEditar">Apellido(s)</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="apellidoEditar" id="apellidoEditar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="dniEditar">DNI</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="dniEditar" id="dniEditar" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="cuilEditar">CUIL</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="cuilEditar" id="cuilEditar" required>
                            </div> 
                        </div> 
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="telefonoEditar">Telefono</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="telefonoEditar" id="telefonoEditar">
                            </div>
                            <div class="col-sm-6">
                                <label for="emailEditar">Email</label>
                                <input type="email" class="form-control form-control-user2"
                                    name="emailEditar" id="emailEditar">
                            </div>
                        </div>    
                        <div class="form-group">
                            <label for="observacionesEditar">Observaciones</label>
                            <input type="text" class="form-control form-control-user2"
                                name="observacionesEditar" id="observacionesEditar">
                        </div>         
                            <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="botonEditarCliente" disabled>Editar</button>
                        </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>