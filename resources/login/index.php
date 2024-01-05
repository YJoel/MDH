<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio de Sesion - MDH </title>
    <link rel="shortcut icon" href="../../images/simbolo_azul1.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="circle-container">
        <div class="circles"></div>
        <div class="circles"></div>
        <div class="circles"></div>
        <div class="circles"></div>
    </div>
    <div class="flex-container">
        <div class="position-absolute top-0 start-50 translate-middle bg-light">
            <img src="../../images/simbolo_azul1.png" alt="">
            <a style="text-decoration: none" href="../../">
                <h5>MI DERECHO ES UN HECHO</h5>
            </a>
        </div>
        <h2 class="text-light">Iniciar Sesion</h2>
        <form class="row g-3 p-3" action="" id="form">
            <div class="col-md-6">
                <label for="usuario" class="form-label">&nbsp;&nbsp;Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
            </div>
            <div class="col-md-6">
                <label for="contrasena" class="form-label">&nbsp;&nbsp;Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Ingresar</button>
                <a type="button" href="" class="btn btn-outline-light">Registrate</a>
            </div>
        </form>
        <p class="text-danger" id="message">
            <!--
                PENDIENTE POR TERMINAR
            -->
        </p>
        <div class="blur">

        </div>
    </div>
    <script src="circleAnimation.js"></script>
    <script src="index.js"></script>
</body>

</html>