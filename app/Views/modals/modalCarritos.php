 <!-- Modal-->
 <div class="modal fade" id="modalCarritos" role="dialog">
            <div class="modal-dialog max" width="600">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 id="title"></h4>
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
                                    <th scope="col">Hora</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Forma de pago</th>
                                    <th scope="col">Cliente</th>
                                </tr>
                            </thead>
                            <tbody id="resultado">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>