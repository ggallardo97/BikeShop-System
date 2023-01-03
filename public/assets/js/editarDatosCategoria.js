$(document).ready(function(){

    $(document).on('click','#editarDatosCategoria', function(){

        let idcategoria  = $(this).data('idcategoria');
        let categoria    = $(this).data('categoria');

        $('#nombrecategoriaEditar').val(categoria);

        $(document).on('keyup', 'input', function() {

            $('#botonEditarCategoria').attr('disabled', false);
            
        });

        $(document).on('click','#botonEditarCategoria', function(){

            $('#editarCategoria-Form').validate({

                rules: {
                    nombrecategoriaEditar : {required: true}
                },
                submitHandler: function(){

                    categoria = $('#nombrecategoriaEditar').val();
                    
                    $('#editarCategoria-Form').waitMe({
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
                        url : 'dashboard/editarDatosCategoria',
                        data: {
                            idcategoria : idcategoria,
                            categoria   : {
                                nombrecategoria : categoria
                            }
                        }
                    }).done(function(res){ 
                        
                        $('#editarCategoria-Form').waitMe('hide');

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