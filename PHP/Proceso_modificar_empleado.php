<?php
    $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");

    if(isset($_POST['Modificar'])){
        $id = $_REQUEST['id'];
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
        $sexo = $_POST['sexo'];
        $fr = $_POST['fr'];

        $query = "UPDATE empleados SET Nombre='$nombre', Apellido='$apellido', Tipo_Documento='$tp', Numero_Documento='$n_documento', Ciudad='$ciudad', Direccion='$direccion', Celular='$celular', Codigo_Acceso='$codigo', Email='$correo', Estado_Civil='$estadocivil', Fecha_Nacimiento='$fn', Sexo='$sexo', Area_Trabajo='$area', Cargo='$cargo', Fecha_Registro='$fr' WHERE id='$id'";
        $resultado = $conexion->query($query);

        if($resultado){
            echo "<script>alert('LOS DATOS DE $nombre HAN SIDO ACTUALIZADOS CORRECTAMENTE')</script>";
            echo "<script>window.open('Paneldecontrol.php#Empleados','_self')</script>";
        }
        else{
            echo "<script>alert('Actualizacion No Exitosa')</script>";
        }
        
    }

?>