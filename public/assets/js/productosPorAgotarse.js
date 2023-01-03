$(document).ready(function(){

    let ctx = document.getElementById('productosBajoStock');

    if(ctx){

        $('#productStock').waitMe({
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
            type    : 'GET',
            url     : 'dashboard/obtenerProductosPorAgotarse',
            dataType: 'json',
        }).done(function(datos){
            
            $('#productStock').waitMe('hide');

            for(let i = 0; i < datos.length; i++){

                res = '<h4 class="small font-weight-bold">' + datos[i].codigoalfa + ' - ' + datos[i].descripcion + '<span class="float-right">' + datos[i].stock + ' unidades</span></h4>';

                $('#productosBajoStock').append(res);

            }
            
        });
    }
});