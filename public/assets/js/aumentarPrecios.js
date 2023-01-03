$(document).ready(function(){

    $(document).on('click','#aumentarPrecio', function(){
        
        $(document).on('click','#botonAumentarPrecio', function(){

            $('#aumentarPrecio-Form').validate({

                rules: {
                    porcentaje  : {required: true}
                },
                submitHandler: function(){

                    let porcentaje = $('#porcentaje').val();

                    $('#aumentarPrecio-Form').waitMe({
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
                        url : 'dashboard/aumentarPrecios',
                        data: {
                            porcentaje : porcentaje
                        }
                    }).done(function(res){

                        $('#aumentarPrecio-Form').waitMe('hide');
                        
                        if(res === 'OK'){

                            swal({
                                title: 'Los precios se han modificado exitosamente',
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