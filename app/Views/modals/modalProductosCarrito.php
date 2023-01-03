 <!-- Modal-->
 <div class="modal fade" id="modalProductosCarrito" role="dialog">
            <div class="modal-dialog max" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Productos del carrito</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body" id="products-table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Codigo alfa</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody id="resultado">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>