$(document).ready(function(){

    $(document).on('click', '#editarDatosCliente', function(){

        let idcliente            = $(this).data('idcliente');
        let dni                  = $(this).data('dni');
        let cuil                 = $(this).data('cuil');
        let nombre               = $(this).data('nombre');
        let apellido             = $(this).data('apellido');
        let telefono             = $(this).data('telefono');
        let emailcliente         = $(this).data('emailcliente');
        let observacionescliente = $(this).data('observacionescliente');

        $('#dniEditar').val(dni);
        $('#cuilEditar').val(cuil);
        $('#nombreEditar').val(nombre);
        $('#apellidoEditar').val(apellido);
        $('#cuilEditar').val(cuil);
        $('#telefonoEditar').val(telefono);
        $('#emailEditar').val(emailcliente);
        $('#observacionesEditar').val(observacionescliente);

        $(document).on('keyup', 'input', function(){

            $('#botonEditarCliente').attr('disabled', false);
            
        });

        $(document).on('click','#botonEditarCliente', function(){

            $('#clienteEditar-Form').validate({
                
                rules: {
                    dniEditar        : {required: true},
                    cuilEditar       : {required: true},
                    nombreEditar     : {required: true},
                    apellidoEditar   : {required: true}
                },
                submitHandler: function(){

                    nombre         = $('#nombreEditar').val();
                    apellido       = $('#apellidoEditar').val();
                    dni            = $('#dniEditar').val();
                    cuil           = $('#cuilEditar').val();
                    telefono       = $('#telefonoEditar').val();
                    email          = $('#emailEditar').val();
                    observaciones  = $('#observacionesEditar').val();

                    $('#clienteEditar-Form').waitMe({
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
                        url : 'dashboard/editarDatosCliente',
                        data: {
                            idcliente : idcliente,
                            cliente   : {
                                dni                  : dni,
                                cuil                 : cuil,
                                nombre               : nombre,
                                apellido             : apellido,
                                telefono             : telefono,
                                emailcliente         : email,
                                observacionescliente : observaciones
                            }
                        }
                    }).done(function(res){

                        $('#clienteEditar-Form').waitMe('hide');

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