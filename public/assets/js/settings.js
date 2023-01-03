$(document).ready(function(){

    perfil = $('#rol').val();
    $('#perfilacceso').val(perfil);

    $(document).on('click','#editarDatosCuenta', function(){

        $('#datosCuenta-Form').validate({
            
            rules: {
                nombres           : {required: true, minlength: 2},
                apellidos         : {required: true, minlength: 2},
                email             : {required: true, email: true},
                perfilacceso      : {required: true},
                contraseniaact    : {required: true, minlength: 5},
                contrasenianueva  : {minlength: 5},
                contrasenianueva2 : {equalTo: '#contrasenianueva', minlength: 5}
            },
            submitHandler: function(){

                let nombres           = $('#nombres').val();
                let apellidos         = $('#apellidos').val();
                let contraseniaact    = $('#contraseniaact').val();
                let perfilacceso      = $('#perfilacceso').val();
                let contrasenianueva  = $('#contrasenianueva').val();

                $('#datosCuenta-Form').waitMe({
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
                    url : 'usercontroller/updateDatosUsuario',
                    data:{
                        password    : contraseniaact,
                        newpassword : contrasenianueva,
                        user        :{
                            username      : nombres,
                            userlastname  : apellidos,
                            category      : perfilacceso
                        }  
                    }
                }).done(function(res){

                    $('#datosCuenta-Form').waitMe('hide');
                        
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