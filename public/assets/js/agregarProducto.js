$(document).ready(function(){

    $(document).on('click','#agregarProducto', function(){
        
        $(document).on('keyup', 'input', function(){

            $('#botonNuevoProducto').attr('disabled', false);
            
        });

        $(document).on('change','#preciocontado', function(){

            let precio1      = $('#preciocontado').val();
            let precioLista  = calcularPrecioLista(precio1);
            let resultado    = Math.round((precioLista + Number.EPSILON) * 100) / 100;
            $('#preciolista').val(resultado);
    
        });

        function calcularPrecioLista(precio){

            return (parseFloat(precio) * 0.076) + parseFloat(precio);
        }

        $(document).on('click','#botonNuevoProducto', function(){

            $('#nuevoProducto-Form').validate({

                rules: {
                    codigooriginal  : {required: true},
                    codigoalfa      : {required: true},
                    descripcion     : {required: true},
                    categoria       : {required: true},
                    precio          : {required: true},
                    preciocontado   : {required: true},
                    stock           : {required: true}
                },
                submitHandler: function(){

                    let codigooriginal = $('#codigooriginal').val();
                    let codigoalfa     = $('#codigoalfa').val();
                    let serie          = $('#serie').val();
                    let descripcion    = $('#descripcion').val();
                    let categoria      = $('#categoria').val();
                    let preciocontado  = $('#preciocontado').val();
                    let preciolista    = $('#preciolista').val();
                    let stock          = $('#stock').val();
                    let imagen;

                    if($('#imagen')[0].files[0]) imagen = $('#imagen')[0].files[0];
                    else imagen = '';

                    let formDatos = new FormData();

                    formDatos.append('codigooriginal', codigooriginal);
                    formDatos.append('codigoalfa', codigoalfa);
                    formDatos.append('descripcion', descripcion);
                    formDatos.append('serie', serie);
                    formDatos.append('idcategoriaprod', categoria);
                    formDatos.append('preciocontado', preciocontado);
                    formDatos.append('preciolista', preciolista);
                    formDatos.append('stock', stock);
                    formDatos.append('imagen', imagen);

                    $('#nuevoProducto-Form').waitMe({
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
                        type       : 'POST',
                        url        : 'dashboard/agregarProducto',
                        cache      : false,
                        processData: false, 
                        contentType: false,
                        data       : formDatos
                    }).done(function(res){
                        
                        $('#nuevoProducto-Form').waitMe('hide');
                        
                        if(res === 'OK'){

                            swal({
                                title: 'Producto agregado exitosamente',
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