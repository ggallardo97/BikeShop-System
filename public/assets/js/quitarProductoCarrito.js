$(document).ready(function(){

    $(document).on('click','#quitarProducto', function(){

        let idproducto = $(this).data('idproducto');

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
            url : 'dashboard/quitarProductoCarrito',
            data: {
                idproducto : idproducto
            }
        }).done(function(res){
            
            if(res !== 'ERROR'){
                
                $('#cantidad-carrito').html(res);

                location.reload();
            }else{
                swal({
                    title: 'Algo salio mal',
                    text : 'Revise los campos por favor',
                    icon : 'error'
                });
            }
        });

    });

});