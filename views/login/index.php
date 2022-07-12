<?php
    require_once 'controllers/login.php';
    $usuario = new Login();
    $usuario->login();

    if (isset($_POST['acceso'])) {
        $datos = array(
            'apodo'    => $_POST['apodo'],
            'password' => $_POST['password']
        );
        $respuesta = $usuario->accesoUsuario($datos);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Iniciar Sesion</title>
</head>
<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image d-flex align-items-center justify-content-center">
                    
                    <img src="public/img/Logo_Veramendis.png" width="400" height="400" alt="">
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <!-- Action la página a la cuál irá la información del formulario -->
                    <!-- Method indica cómo enviaremos la información por el método HTTP -->
                    <!-- enctype multipart/form-data permite agregar archivos -->
                    <form action="<?=URL?>login" method="POST" name="loginForm" id="loginForm">
                        <h1 class="register-login-h1">Acceso</h1>
                        <p class="register-login-p">¡Bienvenido!, por favor ingresa tus credenciales</p>
                        <div class="form-group">
                            <input type="text" id="apodo" name="apodo" class="form-control" required>
                            <label for="apodo" class="form-label">Usuario</label>
                        </div>
                        <div class="form-group margin--bottom">
                            <input type="password" id="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
                                <label class="form-check-label order-2" for="remember">Recuérdame</label>
                                <label class="label--ckecked order-1" for="remember"></label>
                            </div>
                            <!--<a href="#" class="forgot__password--link">¿Olvidó su contraseña?</a>-->
                        </div>
                        <div class="d-flex justify-content-lg-between">
                            <button type="submit" class="btn btn-login align-self-center" name="acceso" id="acceso">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
