$(document).ready(function(){

    $(document).on('click','#editarDatosProducto', function(){

        let idproducto     = $(this).data('idproducto');
        let codigooriginal = $(this).data('codigooriginal');
        let codigoalfa     = $(this).data('codigoalfa');
        let serie          = $(this).data('serie');
        let descripcion    = $(this).data('descripcion');
        let preciocontado  = $(this).data('preciocontado');
        let preciolista    = $(this).data('preciolista');
        let stock          = $(this).data('stock');

        $('#codigooriginalEditar').val(codigooriginal);
        $('#codigoalfaEditar').val(codigoalfa);
        $('#serieEditar').val(serie);
        $('#descripcionEditar').val(descripcion);
        $('#preciocontadoEditar').val(preciocontado);
        $('#preciolistaEditar').val(preciolista);
        $('#stockEditar').val(stock);

        $(document).on('keyup', 'input', function() {

            $('#botonEditarProducto').attr('disabled', false);
            
        });

        $(document).on('change', 'input', function() {

            $('#botonEditarProducto').attr('disabled', false);
            
        });

        $(document).on('click','#botonEditarProducto', function(){

            $('#editarProducto-Form').validate({

                rules: {
                    codigooriginalEditar : {required: true},
                    codigoalfaEditar     : {required: true},
                    descripcionEditar    : {required: true},
                    preciocontadoEditar  : {required: true},
                    preciolistaEditar    : {required: true},
                    stockEditar          : {required: true}
                },
                submitHandler: function(){

                    codigooriginal  = $('#codigooriginalEditar').val();
                    codigoalfa      = $('#codigoalfaEditar').val();
                    serie           = $('#serieEditar').val();
                    descripcion     = $('#descripcionEditar').val();
                    preciocontado   = $('#preciocontadoEditar').val();
                    preciolista     = $('#preciolistaEditar').val();
                    stock           = $('#stockEditar').val();
                    
                    $('#editarProducto-Form').waitMe({
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

                        type: 'POST',
                        url : 'dashboard/editarDatosProducto',
                        data: {
                            idproducto : idproducto,
                            producto   : {
                                codigooriginal : codigooriginal,
                                codigoalfa     : codigoalfa,
                                serie          : serie,
                                descripcion    : descripcion,
                                preciocontado  : preciocontado,
                                preciolista    : preciolista,
                                stock          : stock
                            }
                        }
                    }).done(function(res){ 
                        
                        $('#editarProducto-Form').waitMe('hide');

                        if(res === 'OK'){

                            swal({
                                title: 'Datos modificados exitosamente',
                                icon : 'success'
                            }).then(() => { location.reload(); });
                        }else{
                            swal({
                                title: 'Algo salio mal',
                                text : 'Revise los campos por favor',
                                icon : 'error'
                            });
                        }
                                    
                    });
                }
            });
        });
    });

});