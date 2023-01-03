$(document).ready(function(){

    $(document).on('click','#finjornada', function(){

        let boton          = $('#botonState');
        let botonEncendido = $(this);

        swal({
            title      : '¡Hola!',
            text       : '¿Listo para finalizar la jornada?',
            icon       : 'info',
            buttons    : ['Cancelar', true],
            dangerMode : true,
        }).then((willfinish) => { 

            let codigo = 1;
            if(willfinish){

                $('.container-fluid').waitMe({
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
                    url : 'dashboard/finalizarJornada',
                    data: {
                        codigo : codigo,
                    }
                }).done(function(res){

                    $('.container-fluid').waitMe('hide');
                    
                    if(res === 'OK'){

                        swal({
                            title: '¡La jornada ha finalizado!',
                            text : 'Hora de un buen descanso',
                            icon : 'success'
                        }).then(() => { 

                            botonEncendido.attr('id', 'iniciarjornada');
                            boton.removeClass('btn-success');
                            boton.addClass('btn-danger');
                            boton.html('Offline');

                        });
                    }else{
                        swal({
                            title: 'Algo salio mal',
                            icon : 'error'
                        });
                    }
                });
            }
        });

    });

});