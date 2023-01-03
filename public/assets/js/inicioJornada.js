$(document).ready(function(){

    $(document).on('click','#iniciarjornada', function(){

        let boton          = $('#botonState');
        let botonEncendido = $(this);

        swal({
            title      : '¡Hola!',
            text       : '¿Listo para comenzar la jornada?',
            icon       : 'info',
            buttons    : ['Cancelar', true]
        }).then((willstart) => { 

            let codigo = 1;
            if(willstart){

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
                    url : 'dashboard/iniciarJornada',
                    data: {
                        codigo : codigo,
                    }
                }).done(function(res){

                    $('.container-fluid').waitMe('hide');

                    if(res === 'OK'){

                        swal({
                            title: 'La jornada ha dado inicio',
                            text : '¡Que tengas un buen dia!',
                            icon : 'success'
                        }).then(() => {

                            botonEncendido.attr('id', 'finjornada');
                            boton.removeClass('btn-danger');
                            boton.addClass('btn-success');
                            boton.html('Online');

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