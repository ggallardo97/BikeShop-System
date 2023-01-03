 <!-- Modal-->
 <div class="modal fade" id="modalContratadosPorFuncion" role="dialog">
            <div class="modal-dialog" id="mini-modal" width="400">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4>Contratados por funcion</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">X</span>
                            <span class="sr-only">Cerrar</span>
                        </button>
                    </div>
                    
                    <!-- Modal Body -->
                <div class="modal-body">
                    <form action="<?php echo base_url('consulta'); ?>" method="GET">
                        <div class="form-group">
                            <label for="funcion">Funcion</label>
                            <input type="text" class="form-control form-control-user2" 
                                name="funcion" id="funcion" required>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Consultar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>