<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style-login-panel.css">
    <title>Iniciar Sesión | Administración</title>
</head>
<body>
    <div class="contenido">
        <img src="img/logos/logo1.png" alt="" style="height: 40px;margin-top: 10px; opacity: 60%; margin-left: 10px;">
        <img src="img/avatar/Avatar1.png" alt="" class="avatar">
        <P class="titulo">INGRESO AL SISTEMA</P>
        <form action="ingreso-panel.php" method="post">
            <input type="text" placeholder="Codigo de Acceso" autocomplete="off" name="usuario"><br><br>
            <input type="password" placeholder="Digite Contraseña" autocomplete="off" name="clave"><span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open" style="color: black; border: none; position: relative; top: -32px; left: 340px; width: 5px; background-color: transparent; cursor: pointer;"></span><br>
            <input type="submit" value="Ingresar">
        </form>
        <hr style="width:90%;border: 1px solid rgba(143, 143, 143, 0.548);margin-left: 20px; border-radius: 40%;" />
        <p class="enlace">¿Olvidaste la contraseña? <a href="">Click Aqui</a></p>
    </div>
    <script src="js/mostrarcontraseña.js"></script>
</body>
</html>