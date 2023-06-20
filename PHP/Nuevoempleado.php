<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['registrar'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tp = $_POST['tipodoc'];
        $ciudad = $_POST['ciudad'];
        $celular = $_POST['celular'];
        $codigo = $_POST['codigo'];
        $n_documento = $_POST['ndocumento'];
        $direccion = $_POST['direccion'];
        $estadocivil = $_POST['estadocivil'];
        $fn = $_POST['fn'];
        $correo = $_POST['correo'];
        $area = $_POST['areadetrabajo'];
        $cargo = $_POST['cargo'];
        $sexo = $_POST['gender'];
        $fr = $_POST['fr'];


        $insertar = "INSERT INTO empleados (Nombre, Apellido, Tipo_Documento, Numero_Documento, Ciudad, Direccion, Celular, Codigo_Acceso, Email, Estado_civil, Fecha_Nacimiento, Sexo, Area_Trabajo, Cargo, Fecha_Registro) VALUES ('$nombre', '$apellido', '$tp', '$n_documento', '$ciudad', '$direccion', '$celular', '$codigo', '$correo', '$estadocivil', '$fn', '$sexo','$area','$cargo','$fr')";
        $ejecutar = mysqli_query($conexion,$insertar);

        if($ejecutar){
            echo "<script>alert('Empleado Registrado')</script>";
            echo "<script>window.open('Paneldecontrol.php#Empleados','_self')</script>";
        }
    }

?>