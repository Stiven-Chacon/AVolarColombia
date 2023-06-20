<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['reserva'])){
        $destino1 = $_POST['ds'];
        $destino2 = $_POST['df'];
        $ciudad = $_POST['ciudad'];
        $fecha1 = $_POST['fs'];
        $fecha2 = $_POST['fr'];
        $hora1 = $_POST['hs'];
        $hora2 = $_POST['hr'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $td = $_POST['td'];
        $nd = $_POST['nd'];
        $correo = $_POST['correo'];
        $celular = $_POST['celular'];


        $insertar = "INSERT INTO ventas (Destino_Salida, Destino_Llegada, Ciudad_Origen, Fecha_Salida, Fecha_Regreso, Hora_Salida, Hora_Regreso, Nombres, Apellidos, TD, Numero_Documento, Correo_Electronico, Celular) VALUES ('$destino1', '$destino2', '$ciudad', '$fecha1', '$fecha2', '$hora1', '$hora2', '$nombre', '$apellido', '$td', '$nd', '$correo','$celular')";
        $ejecutar = mysqli_query($conexion,$insertar);

        if($ejecutar){
            echo "<script>alert('Tu Reserva ha sido exitosa')</script>";
            echo "<script>window.open('index.html','_self')</script>";
        }
    }
?>