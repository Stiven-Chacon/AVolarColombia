<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Modificarusuario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <title>Modificar Usuario</title>
</head>
<body style="overflow-y:hidden" >

    <?php
        $id = $_REQUEST['id'];
        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
        $query = "SELECT * FROM usuarios WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>

    <div class="contenedor">
        <div class="header">
            <img src="img/logos/logo2.png" alt="" class="logo">
        </div>
        <h2 class="titulo">Modificar Información de Usuario </h2><br>
        <div class="formulario">
            <form action="Proceso_modificar_usuario.php?id=<?php echo $row['Id'];?>" method="post">
                <div class="nombre">
                    <p class="sub">NOMBRE COMPLETO:</p>
                    <input type="text" name="nombre" id="" value="<?php echo $row['Nombre'];?>" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>
                <div class="apellido">
                    <p class="sub">APELLIDO COMPLETO:</p>
                    <input type="text" name="apellido" value="<?php echo $row['Apellido'];?>" id="" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                </div>     
                <div class="celular">
                    <p class="sub">NUMERO CELULAR:</p>
                    <input type="text" value="<?php echo $row['Celular'];?>" name="celular" id="" required>
                </div>
                <div class="lugar">
                    <p class="sub">CIUDAD:</p>
                    <select class="form-ciudad" id="" name="ciudad">
                        <option value="<?php echo $row['Ciudad'];?>">-<?php echo $row['Ciudad'];?></option>
                        <option value="Arauca">Arauca</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Barranquilla">Barranquilla</option>
                        <option value="Bogotá">Bogotá</option>
                        <option value="Bucaramanga">Bucaramanga</option>
                        <option value="Cali">Cali</option>
                        <option value="Cartagena">Cartagena</option>
                        <option value="Cúcuta">Cúcuta</option>
                        <option value="Florencia">Florencia</option>
                        <option value="Ibagué">Ibagué</option>
                        <option value="Leticia">Leticia</option>
                        <option value="Manizales">Manizales</option>
                        <option value="Medellín">Medellín</option>
                        <option value="Mitú">Mitú</option>
                        <option value="Mocoa">Mocoa</option>
                        <option value="Montería">Montería</option>
                        <option value="Neiva">Neiva</option>
                        <option value="Pasto">Pasto</option>
                        <option value="Pereira">Pereira</option>
                        <option value="Popayán">Popayán</option>
                        <option value="Puerto Carreño">Puerto Carreño</option>
                        <option value="Puerto Inírida">Puerto Inírida</option>
                        <option value="Quibdó">Quibdó</option>
                        <option value="Riohacha">Riohacha</option>
                        <option value="San Andrés">San Andrés</option>
                        <option value="San José del Guaviare">San José del Guaviare</option>
                        <option value="Santa Marta">Santa Marta</option>
                        <option value="Sincelejo">Sincelejo</option>
                        <option value="Tunja">Tunja</option>
                        <option value="Valledupar">Valledupar</option>
                        <option value="Villavicencio">Villavicencio</option>
                        <option value="Yopal">Yopal</option>
                    </select>
                </div>
                <div class="tipo">
                    <p class="sub">TIPO DE DOCUMENTO:</p>
                    <select name="tipodoc" id="" class="form-select">
                        <option value="<?php echo $row['Tipo_Documento'];?>">-<?php echo $row['Tipo_Documento'];?></option>
                        <option value="Cedula">Cedula de Ciudadania</option>
                        <option value="Cedula Extranjeria">Cedula Extranjeria</option>
                        <option value="Pasaporte">Pasaporte</option>
                    </select>
                </div>
                <div class="n-documento">
                    <p class="sub">NUMERO DE DOCUMENTO:</p>
                    <input type="text" value="<?php echo $row['Numero_Documento'];?>" name="ndocumento" id="" required>
                </div>
                <div class="direccion">
                    <p class="sub">DIRECCIÓN:</p>
                    <input type="text" value="<?php echo $row['Direccion'];?>" name="direccion" id="" required>
                </div>
                <div class="f-nacimiento">
                    <p class="sub">FECHA DE NACIMIENTO:</p>
                    <input type="text" value="<?php echo $row['Fecha_Nacimiento'];?>"  name="fn" id="" required>
                </div>
                <div class="correo">
                    <p class="sub">CORREO ELECTRONICO:</p>
                    <input type="email" value="<?php echo $row['Correo_Electronico'];?>" name="correo" id="" required>
                </div>
                <div class="contrasena">
                    <p class="sub">CONTRASEÑA:</p>
                    <input type="password" value="<?php echo $row['Contraseña'];?>" name="contraseña" required id=""><span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open" style="color: black; border: none; position: relative; top: -25px; left: 220px; width: 5px; height: 5px; background-color: transparent; cursor: pointer;"></span>
                </div>
                <div class="sexo">
                    <p class="sub">SEXO:</p>
                    <input type="text" id="male" value="<?php echo $row['Sexo'];?>" name="gender" style="outline: none;">
                </div>
                <input type="reset" value="Restaurar Datos" class="limp">
                <input type="submit" class="enviar" value="Actualizar Datos" name="Actualizar">
            </form>
        </div>
    </div>
</body>
<script src="js/mostrarcontraseña.js"></script>
</html>