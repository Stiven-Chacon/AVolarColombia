<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['guardar'])){
        $id = $_REQUEST['id'];
        $estado = $_POST['estado'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $novedad = $_POST['novedad'];

        $query = "UPDATE contactar SET Estado='$estado', Fecha_Respuesta='$fecha',Hora_Respuesta='$hora', Novedades='$novedad' WHERE id='$id'";
        $resultado = $conexion->query($query);

        if($resultado){
            echo "<script>alert('EL ESTADO DEL MENSAGE NUMERO $id HA SIDO ACTUALIZADO')</script>";
            echo "<script>window.open('Paneldecontrol.php#Mensages','_self')</script>";
        }
        else{
            echo "<script>alert('Actualizacion No Exitosa')</script>";
        }
        
    }

?>