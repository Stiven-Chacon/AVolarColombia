<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    $id = $_REQUEST['id'];

    $query = "DELETE FROM usuarios WHERE id='$id'";
    $resultado = $conexion->query($query);

    if($resultado){
        echo "<script>alert('Usuario Eliminado')</script>";
        echo "<script>window.open('Paneldecontrol.php#Usuarios','_self')</script>";
    }
    else{
        echo "Eliminación No Exitosa";
    }
?>
?>