<?php
    $correo = $_POST['correo'];
    $contrasena = $_POST['clave'];

    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    $consulta="SELECT * FROM usuarios WHERE Correo_Electronico='$correo' and Contraseña='$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    $fila = mysqli_num_rows($resultado);

    /* if($_POST['Contraseña'] == $sesion['Contraseña']){
        $_SESSION['user'] = $_POST['Correo_Electronico'];
    } */

    if($fila>0) {
        echo "<script>alert('Iniciando Sección $correo')</script>";
        echo "<script>window.open('index.html','_self')</script>";
    }
    else{
        echo "<script>alert('Esta cuenta no existe o tienes mal el correo o tu contraseña')</script>";
        echo "<script>window.open('login.html','_self')</script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>