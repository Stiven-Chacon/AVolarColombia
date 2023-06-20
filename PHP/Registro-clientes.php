<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $celular = $_POST['celular'];
        $ciudad = $_POST['ciudad'];
        $t_documento = $_POST['tipo_documento'];
        $n_documento = $_POST['n-documento'];
        $direccion = $_POST['direccion'];
        $f_nacimiento = $_POST['f-nacimiento'];
        $correo = $_POST['correo'];
        $password = $_POST['contraseña'];
        $sexo = $_POST['gender'];

        $insertar = "INSERT INTO usuarios (Nombre, Apellido, Celular, Ciudad, Tipo_Documento, Numero_Documento, Direccion, Fecha_Nacimiento, Correo_Electronico, Contraseña, Sexo) VALUES ('$nombre', '$apellido', '$celular', '$ciudad', '$t_documento', '$n_documento', '$direccion', '$f_nacimiento', '$correo', '$password', '$sexo')";
        $ejecutar = mysqli_query($conexion,$insertar);

        if($ejecutar){
            echo "<script>alert('Registro Exitoso')</script>";
            echo "<script>window.open('login.html','_self')</script>";
        }
    }

?>
