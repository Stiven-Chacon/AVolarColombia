<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Modificarempleado.css">
    <title>Modificar Empleado</title>
</head>
<body>

    <?php
        $id = $_REQUEST['id'];
        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
        $query = "SELECT * FROM empleados WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>

    <div class="vtn2 vtn2-close">
        <h2 style="margin-left: 20px; margin-top: 100px; font-size: 25px; color: white; font-weight: 500;">Modificar información de <?php echo $row['Nombre'];?></h2>
        <div class="vtn2-texto">
            <div class="contents2">
                <form action="Proceso_modificar_empleado.php?id=<?php echo $row['Id'];?>" method="POST">
                    <div class="formulario"><br>
                        <label class="form-label">Nombres:</label><br>
                        <input type="text" class="form-nombre" name="nombre" value="<?php echo $row['Nombre'];?>" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                        <div class="c2">
                            <label class="form-label">Apellidos:</label><br>
                            <input type="text" class="form-nombre" value="<?php echo $row['Apellido'];?>" name="apellido" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="c3">
                            <label class="form-label">DNI:</p>
                            <select name="tipodoc" id="" class="form-tipo">
                                <option value="<?php echo $row['Tipo_Documento'];?>">-<?php echo $row['Tipo_Documento'];?></option>
                                <option value="Cedula">CC</option>
                                <option value="Cedula Extranjeria">CE</option>
                                <option value="Pasaporte">PA</option>
                            </select>
                            <input type="text" name="ndocumento" id="" class="form-ndocu" value="<?php echo $row['Numero_Documento'];?>">
                        </div>
                        <div class="c4">
                            <p class="sub">Ciudad:</p>
                            <select class="form-ciudad" id="" name="ciudad">
                                <option value="<?php echo $row['Ciudad'];?>">-><?php echo $row['Ciudad'];?></option>
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
                        <div class="c5">
                            <label class="form-label">Direccion:</label><br>
                            <input type="text" value="<?php echo $row['Direccion'];?>" class="form-direccion" name="direccion" autocomplete="off"><br>
                        </div>
                        <div class="c6">
                            <label class="form-label">Celular:</label><br>
                            <input type="text" value="<?php echo $row['Celular'];?>" class="form-direccion" name="celular" autocomplete="off"><br>
                        </div>
                        <div class="c7">
                            <label class="form-label">Codigo de Acceso:</label><br>
                            <input type="text" value="<?php echo $row['Codigo_Acceso'];?>" class="form-codigo" name="codigo" autocomplete="off"><br>
                        </div>
                        <div class="c6">
                            <label class="form-label">Correo Electronico:</label><br>
                            <input type="text" value="<?php echo $row['Email'];?>" class="form-codigo" name="correo" autocomplete="off"><br>
                        </div>
                        <div class="c3">
                            <label class="form-label">Estado Civil:</p>
                            <select name="estadocivil" id="" class="form-codigo">
                                <option value="<?php echo $row['Estado_Civil'];?>">-<?php echo $row['Estado_Civil'];?></option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Viudo">Viudo</option>
                            </select>
                        </div>
                        <div class="c6">
                            <label class="form-label">Fecha de Nacimiento:</label><br>
                            <input type="text" value="<?php echo $row['Fecha_Nacimiento'];?>" class="form-fecha" name="fn" autocomplete="off"><br>
                        </div>
                        <div class="sexo">
                            <p class="sub">Sexo:</p>
                            <input type="text" class="cir" name="sexo" value="<?php echo $row['Sexo'];?>" id="">
                        </div>
                        <div class="c9">
                            <label class="form-label">Area de Trabajo:</p>
                            <select name="areadetrabajo" id="" class="form-codigo">
                                <option value="<?php echo $row['Area_Trabajo'];?>">-<?php echo $row['Area_Trabajo'];?></option>
                                <option value="Administrativa">Administrativa</option>
                                <option value="Ventas">Ventas</option>
                                <option value="Derechos Humanos">Derechos Humanos</option>
                                <option value="Seguridad">Seguridad</option>
                                <option value="Servicio al Cliente">Servicio al Cliente</option>
                                <option value="Producción">Producción</option>
                                <option value="Finanzas">Finanzas</option>
                            </select>
                        </div>
                        <div class="c10">
                            <label class="form-label">Cargo Ocupado:</label><br>
                            <input type="text" value="<?php echo $row['Cargo'];?>" class="form-codigo" name="cargo" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                        </div>
                        <div class="c6">
                            <label class="form-label">Fecha de Registro:</label><br>
                            <input type="txt" value="<?php echo $row['Fecha_Registro'];?>" class="form-fecha" name="fr" autocomplete="off"><br>
                        </div>
                        <input type="reset" value="Restaurar Datos" class="limp">
                        <input type="submit" class="botonen" value="Modificar Datos" name="Modificar"><br><br>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>