<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                    <img src="<?php echo base_url('/assets/img/BikeShopOranLogo.png'); ?>" alt="BSO-logo" height="400px" width="400px" style="margin-left: 50px; margin-top: 12px;">
                    </div>
                    <div class="col-lg-7">
                    <?php if(isset($error)){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Error en la creacion de usuario
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear una cuenta</h1>
                            </div>
                            <form class="user" action="" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user2" id="exampleFirstName"
                                            name="username" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user2" id="exampleLastName"
                                            name="userlastname" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user2" id="exampleInputEmail"
                                        name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user2"
                                            name="userpassword" id="exampleInputPassword" pattern="[A-Za-z0-9._-]{5,30}$"
                                            title="Cinco caracteres como minimo" placeholder="Contraseña" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user2"
                                            name="userpassconfirm" id="exampleRepeatPassword" placeholder="Repetir contraseña" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar cuenta">
                            </form>
                            <hr>
                            <!--<div class="text-center">
                                <a class="small" href="forgotPassword">¿Olvidó su contraseña?</a>
                            </div>-->
                            <div class="text-center">
                                <a class="small" href="login">¿Ya tiene una cuenta? ¡Inicie sesion!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>