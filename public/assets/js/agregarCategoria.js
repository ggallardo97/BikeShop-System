$(document).ready(function(){

    $(document).on('click','#agregarCategoria', function(){

        $(document).on('keyup', 'input', function(){

            $('#botonNuevaCategoria').attr('disabled', false);
            
        });

        $(document).on('click','#botonNuevaCategoria', function(){

            $('#nuevaCategoria-Form').validate({

                rules: {
                    nombrecategoria  : {required: true}
                },
                submitHandler: function(){

                    let nombrecategoria = $('#nombrecategoria').val();

                    $('#nuevaCategoria-Form').waitMe({
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
                        url : 'dashboard/agregarCategoria',
                        data: {
                            nombrecategoria : nombrecategoria
                        }
                    }).done(function(res){

                        $('#nuevaCategoria-Form').waitMe('hide');
                        
                        if(res === 'OK'){

                            swal({
                                title: 'Categoria agregada exitosamente',
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