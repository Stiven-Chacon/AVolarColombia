<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Mensage</title>
</head>
<body>
    <?php
        $id = $_REQUEST['id'];
        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
        $query = "SELECT * FROM contactar WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>
    <br>
    <div class="contenedor" style="text-align:center; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; border:solid 1px; width:550px; margin-left:420px; border-radius: 10px;">
        <h2 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size:20px; ">MODIFICAR MENSAJE NUMERO <?php echo $row['Id'];?> DE <?php echo $row['Nombre'];?> </h2>
        <form action="Proceso_configuracion_mensage.php?id=<?php echo $row['Id'];?>" method="post">
            <p style="margin-left: -160px;">Estado del Mensaje</p>
            <select name="estado" id="" style="width: 300px; height: 30px;">
                <option value="<?php echo $row['Estado'];?>">-<?php echo $row['Estado'];?></option>
                <option value="Atendido">Atendido</option>
                <option value="Pendiente">Pendiente</option>
                <option value="Contactar Despues">Contactar Despues</option>
            </select>
            <p style="margin-left: -160px;">Fecha de Atención</p>
            <input type="date" name="fecha" id="" value="<?php echo $row['Fecha_Respuesta'];?>" style="width: 280px;">
            <p style="margin-left: -160px;">Hora de Atencion</p>
            <input type="time" name="hora" id="" value="<?php echo $row['Hora_Respuesta'];?>" style="width: 280px;">
            <p style="margin-left: -260px;">Novedades del mensaje</p>
            <textarea name="novedad" rows="10" cols="50" style="width: 420px;"><?php echo $row['Novedades'];?></textarea><br><br>
            <input type="submit" name="guardar" value="Guardar Estado" style="top: -10px; position:relative; width:250px; height:30px; cursor:pointer">
        </form>
    </div>
</body>
</html>