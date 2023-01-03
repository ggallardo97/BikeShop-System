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
                            <img src="<?php echo base_url('/assets/img/logounsa.png'); ?>" alt="Unsa-logo" height="500px" width="400px" style="margin-left: 50px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Olvidó su contraseña?</h1>
                                        <p class="mb-4">Solo ingrese su email y le enviaremos un link para reestablecer su contraseña</p>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" name="email"
                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                title="Utilice un formato correcto de correo" placeholder="Email">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Reestablecer contraseña">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="registerUser">Crear una cuenta</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login">¿Ya tiene una cuenta? ¡Inicie sesion!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
