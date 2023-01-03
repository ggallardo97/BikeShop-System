$(document).ready(function(){

    $(document).on('click','#editarDatosCierre', function(){

        let idinicio      = $(this).data('idinicio');
        let observaciones = $(this).data('observaciones');

        $('#observacionesEditar').val(observaciones);

        $(document).on('keyup', '#observacionesEditar', function(){

            $('#botonEditarCierre').attr('disabled', false);
            
        });

        $(document).on('click','#botonEditarCierre', function(){

            $('#editarCierre-Form').validate({

                rules: {
                    observacionesEditar : {required: true}
                },
                submitHandler: function(){

                    observaciones = $('#observacionesEditar').val();
                    
                    $('#editarCierre-Form').waitMe({
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
                        url : 'dashboard/editarDatosCierre',
                        data: {
                            idinicio      : idinicio,
                            observaciones : observaciones
                        }
                    }).done(function(res){ 
                        
                        $('#editarCierre-Form').waitMe('hide');

                        if(res === 'OK'){

                            swal({
                                title: 'Datos agregados exitosamente',
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