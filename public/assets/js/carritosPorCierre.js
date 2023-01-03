$(document).ready(function(){

    $(document).on('click','#carritosCierre', function(){

        let idinicio    = $(this).data('idinicio');
        let fechainicio = $(this).data('fecha');
        let info        = 'Ventas del dia: ' + fechainicio;

        $('#title').html(info);

        $('#products-table').waitMe({
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
            url : 'dashboard/obtenerCarritosPorCierre',
            data: {
                idinicio : idinicio
            }
        }).done(function(res){

            $('#products-table').waitMe('hide');
            
            if(res !== 'ERROR'){
                
                $('#resultado').html(res);

            }else{
                swal({
                    title: 'Algo salio mal',
                    icon : 'error'
                });
            }
        });

    });

});