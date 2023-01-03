    <?php if(isset($_SESSION['user'])) { ?>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; BikeShop Oran <?php echo date('Y'); ?></span>
                </div>
            </div>
        </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" si quiere finalizar esta sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="<?php echo base_url('logout');?>">Salir</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.13.0/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery-validate.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>  
    <script src="<?php echo base_url('/assets/js/sb-admin-2.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/waitMe.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/waitMe.min.js');?>"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url('/assets/js/datatables.js');?>"></script>

    <!-- Mis scripts -->
    <script src="<?php echo base_url('/assets/js/agregarCategoria.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/agregarAlCarrito.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/agregarProducto.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/aumentarPrecios.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/carritosPorCierre.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/editarDatosProducto.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/editarDatosCategoria.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/editarDatosCliente.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/editarDatosCierre.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/estadisticasArea.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/estadisticasSectores.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/finJornada.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/inicioJornada.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/mini-datatables.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/productosCarrito.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/productosPorAgotarse.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/quitarProductoCarrito.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/registrarCompra.js'); ?>"></script>
    <script src="<?php echo base_url('/assets/js/settings.js'); ?>"></script>
    
</body>

</html>