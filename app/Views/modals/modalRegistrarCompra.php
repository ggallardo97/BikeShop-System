 <!-- Modal-->
 <div class="modal fade" id="modalRegistrarCompra" role="dialog">
            <div class="modal-dialog" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Registrar compra</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form class="user" action="" method="POST" id="registrarVenta-Form">
                        <div class="form-group">
                            <label for="dnicliente1">Buscar por DNI</label>
                            <button type="button" class="btn btn-sm btn-primary" style="margin-left: 200px;"
                                id="nuevoCliente"><i class="fas fa-user-plus fa-sm text-white-50"></i>
                                     Nuevo cliente
                            </button>
                            <button type="button" class="btn btn-sm btn-primary"
                                id="noguardarCliente"><i class="fas fa-user-xmark fa-sm text-white-50"></i>
                                     No guardar cliente
                            </button>
                            <input type="text" class="form-control form-control-user2"
                                name="dnicliente1" id="dnicliente1" required>
                        </div>
                        <div class="form-group row nuevocliente">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="nombrecliente">Nombre(s)</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="nombrecliente" id="nombrecliente" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="apellidocliente">Apellido(s)</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="apellidocliente" id="apellidocliente" required>
                            </div>
                        </div>
                        <div class="form-group row nuevocliente">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="dnicliente">DNI</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="dnicliente" id="dnicliente" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="cuilcliente">CUIL</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="cuilcliente" id="cuilcliente">
                            </div>     
                        </div>     
                        <div class="form-group row nuevocliente">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="telefonocliente">Telefono</label>
                                <input type="text" class="form-control form-control-user2"
                                    name="telefonocliente" id="telefonocliente">
                            </div>
                            <div class="col-sm-6">
                                <label for="emailcliente">Email</label>
                                <input type="email" class="form-control form-control-user2"
                                    name="emailcliente" id="emailcliente">
                            </div>
                        </div>    
                        <div class="form-group nuevocliente">
                            <label for="observacionescliente">Observaciones</label>
                            <input type="text" class="form-control form-control-user2"
                                name="observacionescliente" id="observacionescliente">
                        </div>         
                        <div class="form-group">
                            <label for="mediodepago">Metodo de pago</label>
                            <select name="metododepago" id="metododepago" class="form-control form-control-user2" required>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Tarjeta de credito">Tarjeta de Credito</option>
                                <option value="Tarjeta de debito">Tarjeta de Debito</option>
                                <option value="Transferencia">Transferencia</option>
                            </select>
                        </div>         
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" id="botonRegistrarCompra">Vender</button>
                        </div>                                                                                                         
                        </form>
                    </div>
                </div>
            </div>
        </div>