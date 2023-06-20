<?php
    $conect = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $motivo = $_POST['motivo'];

        $insert = "INSERT INTO contactar (Nombre, Email, Telefono, Motivo) VALUES ('$nombre', '$email', '$telefono', '$motivo')";
        $start = mysqli_query($conect,$insert);

        if($start){
            echo "<script>alert('Datos enviados correctamente, espera nuestro llamado durante el dia segun su prioridad')</script>";
            echo "<script>window.open('./index.html','_self')</script>";
        }
    }
?>