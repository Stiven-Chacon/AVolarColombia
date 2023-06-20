<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['Actualizar'])){
        $id = $_REQUEST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tp = $_POST['tipodoc'];
        $ciudad = $_POST['ciudad'];
        $celular = $_POST['celular'];
        $n_documento = $_POST['ndocumento'];
        $direccion = $_POST['direccion'];
        $fn = $_POST['fn'];
        $correo = $_POST['correo'];
        $sexo = $_POST['gender'];
        $pass = $_POST['contraseña'];

        $query = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido',Celular='$celular', Ciudad='$ciudad', Tipo_Documento='$tp', Numero_Documento='$n_documento', Direccion='$direccion', Fecha_Nacimiento='$fn', Correo_Electronico='$correo', Contraseña='$pass', Sexo='$sexo' WHERE id='$id'";
        $resultado = $conexion->query($query);

        if($resultado){
            echo "<script>alert('$nombre Los Datos Han Sido Actualizados Correctamente')</script>";
            echo "<script>window.open('Paneldecontrol.php#Usuarios','_self')</script>";
        }
        else{
            echo "<script>alert('Actualizacion No Exitosa')</script>";
        }
        
    }

?>