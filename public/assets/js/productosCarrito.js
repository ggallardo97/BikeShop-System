$(document).ready(function(){

    $(document).on('click','#productosCarrito', function(){

        let idcarrito = $(this).data('idcarrito');

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
            url : 'dashboard/obtenerProductosCarrito',
            data: {
                idcarrito : idcarrito
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