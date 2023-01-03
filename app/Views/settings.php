
<div class="col-lg-8" style="margin: 0 auto;">
<div class="p-5">
<div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Datos de su cuenta</h1>
    </div>
    <form class="user" action="" method="POST" id="datosCuenta-Form">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="nombre">Nombre(s)</label>
                <input type="text" class="form-control form-control-user2"
                    name="nombre" id="nombre" value="<?php echo $user['username']; ?>" required>
            </div>
            <div class="col-sm-6">
                <label for="apellido">Apellido(s)</label>
                <input type="text" class="form-control form-control-user2"
                    name="apellido" id="apellido" value="<?php echo $user['userlastname']; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="text" class="form-control form-control-user2"
                name="email" id="email" value="<?php echo $user['email']; ?>" disabled>
        </div>
        Cambiar contraseña
        <hr class="sidebar-divider">
        <div class="form-group">
            <label for="contraseniaact">Contraseña actual</label>
            <input type="password" class="form-control form-control-user2"
                name="contraseniaact" id="contraseniaact" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="contrasenianueva">Nueva contraseña</label>
                <input type="password" class="form-control form-control-user2"
                    name="contrasenianueva" id="contrasenianueva">
            </div>
            <div class="col-sm-6">
                <label for="contrasenianueva2">Repetir nueva contraseña</label>
                <input type="password" class="form-control form-control-user2"
                    name="contrasenianueva2" id="contrasenianueva2">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block" id="editarDatosCuenta">Editar</button>      
        </form>
    </div>
</div>
    