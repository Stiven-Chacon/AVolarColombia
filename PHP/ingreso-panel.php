<?php
    $codigo = $_POST['usuario'];
    $contrasena = $_POST['clave'];

    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    $consulta="SELECT * FROM empleados WHERE Codigo_Acceso='$codigo' and Numero_Documento='$contrasena'";
    $resultado = mysqli_query($conexion, $consulta);

    $fila = mysqli_num_rows($resultado);

    /* if($_POST['Contraseña'] == $sesion['Contraseña']){
        $_SESSION['user'] = $_POST['Correo_Electronico'];
    } */

    if($fila>0) {
        echo "<script>alert('Acceso Autorizado')</script>";
        echo "<script>window.open('Paneldecontrol.php','_self')</script>";
    }
    else{
        echo "<script>alert('Acceso Denegado')</script>";
        echo "<script>window.open('login-panel.html','_self')</script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>