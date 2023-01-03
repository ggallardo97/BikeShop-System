$(document).ready(function(){

    $(document).on('click','#agregarAlCarrito', function(){

        idproducto   = $(this).data('idproducto');
        codigoalfa   = $(this).data('codigoalfa');
        descripcion  = $(this).data('descripcion');
        precioc      = $(this).data('precioc');
        preciot      = $(this).data('preciot');
        stock        = $(this).data('stock');
        
        $('#cantidad').val(1);
        $('#cantidad').attr('max', stock);

        $(document).on('click','#botonProductoCarrito', function(){

            $('#agregarProductoCarrito-Form').validate({

                rules: {
                    cantidad : {required: true}
                },
                submitHandler: function(){
    
                    cantidad = $('#cantidad').val();

                    $('#agregarProductoCarrito-Form').waitMe({
                        effect   : 'bounce',
                        text     : 'Cargando',
                        maxSize  : '',
                        color    : '#ad14c2',
                        waitTime : -1,
                        textPos  : 'vertical',
                        fontSize : '',
                        source   : '',
                        onClose  : function(){}
                    });
            
                    $.ajax({
                        type : 'POST',
                        url  : 'dashboard/agregarProductoCarrito',
                        cache: false,
                        data : {
                            carrito : {
                                idproducto  : idproducto,
                                codigoalfa  : codigoalfa,
                                descripcion : descripcion,
                                cantidad    : cantidad,
                                precioc     : precioc,
                                preciot     : preciot,
                                stock       : stock
                            }
                        }
                    }).done(function(res){

                        $('#agregarProductoCarrito-Form').waitMe('hide');

                        switch(res){

                            case 'EXISTE':
                                swal({
                                    title: 'Producto ya agregado al carrito',
                                    icon : 'warning'
                                });
                            break;

                            case 'ERROR':
                                swal({
                                    title: 'Jornada no iniciada',
                                    icon : 'error'
                                });
                            break;

                            default:
                                $('#cantidad-carrito').html(res);

                                swal({
                                    title: 'Producto agregado al carrito',
                                    icon : 'success'
                                });
                            break;
                        }
                    });
                }
            });
        });
        
    });
});