$(document).ready(function(){

    let totalc = $('#botonTotal').data('totalc');
    let totalt = $('#botonTotal').data('totalt');
    $('#totalCarritoC').html('Total Contado = $' + totalc);
    $('#totalCarritoT').html('Total Tarjeta = $' + totalt);

    $(document).on('click','#registrarCompra', function(){

        let codigo = 1;

        $.ajax({
            type: 'POST',
            url : 'dashboard/obtenerDNIClientes',
            data: {
                codigo : codigo
            }
        }).done(function(res){

            resultadosdni = JSON.parse(res);

            $('#dnicliente1').autocomplete({
                source : resultadosdni
            });
        });

        $('.nuevocliente').hide();

        $(document).on('click','#nuevoCliente', function(){

            $('.nuevocliente').toggle();
            $('#dnicliente1').prop('disabled', function(i, v) { return !v; });
            $('#noguardarCliente').prop('disabled', function(i, v) { return !v; });
            
        });

        $(document).on('click','#noguardarCliente', function(){

            $('#dnicliente1').prop('disabled', function(i, v) { return !v; });
            $('#nuevoCliente').prop('disabled', function(i, v) { return !v; });
            
        });

        $(document).on('click','#botonRegistrarCompra', function(){

            if($('#nombrecliente').val() != ''){

                $('#registrarVenta-Form').validate({

                    rules: {
                        nombrecliente   : {required: true},
                        apellidocliente : {required: true},
                        dnicliente      : {required: true, minlength: 7, maxlength: 8},
                        metododepago    : {required: true}
                    },
                    submitHandler: function(){
        
                        nombre        = $('#nombrecliente').val();
                        apellido      = $('#apellidocliente').val();
                        dni           = $('#dnicliente').val();
                        cuil          = $('#cuilcliente').val();
                        email         = $('#emailcliente').val();
                        telefono      = $('#telefonocliente').val();
                        observaciones = $('#observacionescliente').val();
                        metododepago  = $('#metododepago').val();

                        $('#registrarVenta-Form').waitMe({
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
                            url  : 'dashboard/registrarVenta',
                            cache: false,
                            data : {
                                metododepago : metododepago,
                                cliente : {
                                    nombre        : nombre,
                                    apellido      : apellido,
                                    dni           : dni,
                                    cuil          : cuil,
                                    telefono      : telefono,
                                    emailcliente  : email,
                                    observacionescliente : observaciones
                                }
                            }
                        }).done(function(res){
                            
                            if(res === 'OK'){

                                $('#cantidad-carrito').html(0);

                                swal({
                                    title: '¡Venta registrada exitosamente!',
                                    icon : 'success'
                                }).then(() => { location.reload(); });

                            }else{
                                swal({
                                    title: 'Ha ocurrido un error',
                                    icon : 'error'
                                });
                            }
                        });
                    }
                });

            }else{

                if($('#dnicliente1').val() != ''){

                    $('#registrarVenta-Form').validate({

                        rules: {
                            dnicliente1  : {required: true, minlength: 7, maxlength: 8},
                            metododepago : {required: true}
                        },
                        submitHandler: function(){
            
                            dni           = $('#dnicliente1').val();
                            metododepago  = $('#metododepago').val();

                            $('#registrarVenta-Form').waitMe({
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
                                url  : 'dashboard/registrarVenta',
                                cache: false,
                                data : {
                                    dni          : dni,
                                    metododepago : metododepago
                                }
                            }).done(function(res){
                                
                                if(res === 'OK'){

                                    $('#cantidad-carrito').html(0);

                                    swal({
                                        title: '¡Venta registrada exitosamente!',
                                        icon : 'success'
                                    }).then(() => { location.reload(); });

                                }else{
                                    swal({
                                        title: 'Ha ocurrido un error',
                                        icon : 'error'
                                    });
                                }
                            });
                        }
                    });
                    
                }else{

                    $('#registrarVenta-Form').validate({

                        rules: {
                            metododepago : {required: true}
                        },
                        submitHandler: function(){
            
                            metododepago  = $('#metododepago').val();

                            $('#registrarVenta-Form').waitMe({
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
                                url  : 'dashboard/registrarVenta',
                                cache: false,
                                data : {
                                    metododepago : metododepago
                                }
                            }).done(function(res){
                                
                                if(res === 'OK'){

                                    $('#cantidad-carrito').html(0);

                                    swal({
                                        title: '¡Venta registrada exitosamente!',
                                        icon : 'success'
                                    }).then(() => { location.reload(); });

                                }else{
                                    swal({
                                        title: 'Ha ocurrido un error',
                                        icon : 'error'
                                    });
                                }
                            });
                        } 
                    });       
                }
            }
        });
    });
});