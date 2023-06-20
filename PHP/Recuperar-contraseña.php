<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style-R-contraseña.css">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <div class="content">
        <h2 style="text-align: center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; margin-top: 50px;">Recuperar Contraseña</h2><br>
        <form action="mail_reset.php" method="POST" class="form">
            <p style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Correo Electronico:</p><br>
            <input type="email" placeholder="&#128100 Ingrese la direccion de correo electronico" class="email" id="email" name="email"><br><br>
            <input type="submit" value="Recuperar" class="boton" onclick="alerta1()">
        </form>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/alertas/alertarecuperacion.js"></script>
</body>
</html>

<?php

?>