
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
        
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="<?php echo base_url('/assets/img/BikeShopOranLogo.png'); ?>" alt="BSO-logo" height="400px" width="400px" style="margin-left: 50px; margin-top:12px;">
                            </div>
                            <div class="col-lg-6">
                            <?php if(isset($error)){ ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Usuario o contraseña incorrectos :(
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                title="Utilice un formato correcto de correo" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="userpassword" id="exampleInputPassword" placeholder="Contraseña" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" name="rememberme" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordarme</label>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Iniciar sesion">
                                    </form>
                                    <hr>
                                    <!--<div class="text-center">
                                        <a class="small" href="forgotPassword">¿Olvidó su contraseña?</a>
                                    </div>-->
                                    <div class="text-center">
                                        <a class="small" href="registerUser">Crear una cuenta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
