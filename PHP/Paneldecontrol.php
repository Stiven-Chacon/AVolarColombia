<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="css/Paneldecontrol.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
        <title>Panel de Control</title>
   </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <div class="logo_name"><img src="img/logos/logo2.png" alt="" style="height: 33px;"></div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>
            <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Buscar...">
                <span class="tooltip">Buscador</span>
            </li>
            <ul class="nav-list">
                <!-- <li>
                    <a href="#Panel">
                        <i class='bx bx-grid-alt'></i>
                        <span class="links_name">Panel</span>
                    </a>
                    <span class="tooltip">Panel</span>
                </li> -->
                <!-- <li>
                    <a href="#Planesnacionales">
                        <i class='bx bx-flag'></i>
                        <span class="links_name">Planes Nacionales</span>
                    </a>
                    <span class="tooltip">Planes Nacionales</span>
                </li> -->
                <!-- <li>
                    <a href="#Planesinternacionales">
                        <i class='bx bx-planet'></i>
                        <span class="links_name">Planes Internacionales</span>
                    </a>
                    <span class="tooltip">Planes Internacionales</span>
                </li> -->
                <!-- <li>
                    <a href="#Vuelos">
                        <i class='bx bxs-plane-alt'></i>
                        <span class="links_name">Vuelos</span>
                    </a>
                    <span class="tooltip">Vuelos</span>
                </li> -->
                <li>
                    <a href="#Usuarios">
                        <i class='bx bx-group'></i>
                        <span class="links_name">Usuarios</span>
                    </a>
                    <span class="tooltip">Usuarios</span>
                </li>
                <li>
                    <a href="#Empleados">
                        <i class='bx bxs-user-badge'></i>
                        <span class="links_name">Empleados</span>
                    </a>
                    <span class="tooltip">Empleados</span>
                </li>
                <li>
                    <a href="#Mensages">
                        <i class='bx bx-chat' ></i>
                        <span class="links_name">Mensages</span>
                    </a>
                    <span class="tooltip">Mensages</span>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class='bx bx-folder' ></i>
                        <span class="links_name">File Manager</span>
                    </a>
                    <span class="tooltip">Files</span>
                </li> -->
                <li>
                    <a href="#Ventas">
                        <i class='bx bx-cart-alt' ></i>
                        <span class="links_name">Ventas</span>
                    </a>
                    <span class="tooltip">Ventas</span>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class='bx bx-cog' ></i>
                        <span class="links_name">Ajustes</span>
                    </a>
                    <span class="tooltip">Ajustes</span>
                </li> -->
                <li class="profile">
                    <div class="profile-details">
                        <img src="img/avatar/Avatar2.png" alt="profileImg">
                        <div class="name_job">
                            <div class="name">Johan Celis</div>
                            <div class="job">Administrador</div>
                        </div>
                    </div>

                    <a href="botoncerrar.php" style="background: none;"><i class='bx bx-log-out' id="log_out" name='cerrar' ></i></a>
                    
                </li>
            </ul>
        </div>
       <!--  <section id="Planesnacionales" class="home-section">
            <div class="text">Planes Nacionales</div>
        </section> -->
        <!-- <section id="Planesinternacionales" class="home-section">
            <div class="text">Planes Internacionales</div>
        </section> -->
        <!-- <section id="Vuelos" class="home-section">
            <div class="text">Vuelos</div>
        </section> -->

        <section id="Usuarios" class="home-section1">
            <h2 class="texto">TABLA DE USUARIOS</h2>
            <table>
                <thead>
                    <tr>
                        <td class="id">ID</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Celular</td>
                        <td>Ciudad</td>
                        <td>Tipo</td>
                        <td>Numero de Documento</td>
                        <td>Dirección</td>
                        <td>Fecha Nacimiento</td>
                        <td>Correo Electronico</td>
                        <td>Contraseña</td>
                        <td>Sexo</td>
                        <td colspan="2">Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
                        $query = "SELECT * FROM usuarios ";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                    ?>

                        <tr>
                            <td class="id"><?php echo $row['Id'] ?></td>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php echo $row['Apellido'] ?></td>
                            <td><?php echo $row['Celular'] ?></td>
                            <td><?php echo $row['Ciudad'] ?></td>
                            <td><?php echo $row['Tipo_Documento'] ?></td>
                            <td><?php echo $row['Numero_Documento'] ?></td>
                            <td><?php echo $row['Direccion'] ?></td>
                            <td><?php echo $row['Fecha_Nacimiento'] ?></td>
                            <td><?php echo $row['Correo_Electronico'] ?></td>
                            <td><?php echo $row['Contraseña'] ?></td>
                            <td><?php echo $row['Sexo'] ?></td>
                            <td><a href="Modificar_usuarios.php?id=<?php echo $row['Id'];?>" class="editar"><i class='bx bx-edit-alt'></i></a></td>
                            <td><a href="Eliminar_usuario.php?id=<?php echo $row['Id'];?>" class="borrar"><i class='bx bx-trash-alt'></i></a></td>
                        </tr>
                    
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>

        <section id="Empleados" class="home-section2">
            <h2 class="texto">TABLA DE EMPLEADOS</h2><br>
            <button class="agregar" id="agregar">&#x2795 Nuevo Empleado</button><br><br>
            
            <table>
                <thead>
                    <tr>
                        <td class="id">ID</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>Tipo de Documento</td>
                        <td>Numero de Documento</td>
                        <td>Ciudad</td>
                        <td>Dirección</td>
                        <td>Celular</td>
                        <td>Codigo de Acceso</td>
                        <td>Correo Electronico</td>
                        <td>Estado Civil</td>
                        <td>Fecha Nacimiento</td>
                        <td>Sexo</td>
                        <td>Area De Trabajo</td>
                        <td>Cargo</td>
                        <td>Fecha de Registro</td>
                        <td colspan="2">Opciones</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
                        $query = "SELECT * FROM empleados ";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                    ?>

                    <tr>
                        <td class="id"><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Nombre'] ?></td>
                        <td><?php echo $row['Apellido'] ?></td>
                        <td><?php echo $row['Tipo_Documento'] ?></td>
                        <td><?php echo $row['Numero_Documento'] ?></td>
                        <td><?php echo $row['Ciudad'] ?></td>
                        <td><?php echo $row['Direccion'] ?></td>
                        <td><?php echo $row['Celular'] ?></td>
                        <td><?php echo $row['Codigo_Acceso'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Estado_Civil'] ?></td>
                        <td><?php echo $row['Fecha_Nacimiento'] ?></td>
                        <td><?php echo $row['Sexo'] ?></td>
                        <td><?php echo $row['Area_Trabajo'] ?></td>
                        <td><?php echo $row['Cargo'] ?></td>
                        <td><?php echo $row['Fecha_Registro'] ?></td>
                        <td><a href="Modificar_empleado.php?id=<?php echo $row['Id'];?>" class="editar"><i class='bx bx-edit-alt'></i></a></td>
                        <td><a href="Eliminar_empleado.php?id=<?php echo $row['Id'];?>" class="borrar"><i class='bx bx-trash-alt'></i></a></td>
                    </tr>
                
                    <?php
                        }
                    ?>
                </tbody>
            </table>

            <div class="vtn2-content">
                <div class="vtn2 vtn2-close">
                    <h2 style="margin-left: 20px; margin-top: 45px; font-size: 25px; color: white; font-weight: 500;">Registro de Nuevo Empleado</h2>
                    <p class="close4"><i class='bx bx-x bx-md'></i></box-icon></p>
                    <div class="vtn2-texto">
                        <div class="contents2">
                            <form action="Nuevoempleado.php" method="POST">
                                <div class="formulario"><br>
                                    <label class="form-label">Nombres:</label><br>
                                    <input type="text" class="form-nombre" name="nombre" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                                    <div class="c2">
                                        <label class="form-label">Apellidos:</label><br>
                                        <input type="text" class="form-nombre" name="apellido" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="c3">
                                        <label class="form-label">DNI:</p>
                                        <select name="tipodoc" id="" class="form-tipo">
                                            <option value="No selecciono">-</option>
                                            <option value="Cedula">CC</option>
                                            <option value="Cedula Extranjeria">CE</option>
                                            <option value="Pasaporte">PA</option>
                                        </select>
                                        <input type="text" name="ndocumento" id="" class="form-ndocu">
                                    </div>

                                    <div class="c4">
                                        <p class="sub">Ciudad:</p>
                                        <select class="form-ciudad" id="" name="ciudad">
                                            <option value="No Selecciono">---</option>
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
                                        <input type="text" class="form-direccion" name="direccion" autocomplete="off"><br>
                                    </div>
                                    <div class="c6">
                                        <label class="form-label">Celular:</label><br>
                                        <input type="text" class="form-direccion" name="celular" autocomplete="off"><br>
                                    </div>
                                    <div class="c7">
                                        <label class="form-label">Codigo de Acceso:</label><br>
                                        <input type="text" class="form-codigo" name="codigo" autocomplete="off"><br>
                                    </div>
                                    <div class="c6">
                                        <label class="form-label">Correo Electronico:</label><br>
                                        <input type="text" class="form-codigo" name="correo" autocomplete="off"><br>
                                    </div>
                                    <div class="c3">
                                        <label class="form-label">Estado Civil:</p>
                                        <select name="estadocivil" id="" class="form-codigo">
                                            <option value="No selecciono">---</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>
                                        </select>
                                    </div>
                                    <div class="c6">
                                        <label class="form-label">Fecha de Nacimiento:</label><br>
                                        <input type="date" class="form-fecha" name="fn" autocomplete="off"><br>
                                    </div>
                                    <div class="sexo">
                                        <p class="sub">Sexo:</p>
                                        <div class="cir">
                                            <input type="radio" id="male" name="gender"   value="Masculino" style="outline: none;">
                                            <label for="male">Masculino</label>
                                            <input type="radio" id="female" name="gender" value="Femenino" style="outline: none;margin-left: 5px;">
                                            <label for="female">Femenino</label>
                                            <input type="radio" id="other" name="gender"  value="Otro" style="outline: none; margin-left: 5px;">
                                            <label for="other">Otro</label>
                                        </div>
                                    </div>
                                    <div class="c9">
                                        <label class="form-label">Area de Trabajo:</p>
                                        <select name="areadetrabajo" id="" class="form-codigo">
                                            <option value="No selecciono">Pendiente</option>
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
                                        <input type="text" class="form-codigo" name="cargo" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                                    </div>

                                    <div class="c6">
                                        <label class="form-label">Fecha de Registro:</label><br>
                                        <input type="date" class="form-fecha" name="fr" autocomplete="off"><br>
                                    </div>

                                    <input type="reset" value="Borar Todo" class="limp">
                                    <input type="submit" class="botonen" value="Registar Empleado" name="registrar"><br><br>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="Mensages" class="home-section3">
            <h2 class="texto">ATENCION AL CLIENTE</h2>
            <table>
                <thead>
                    <tr>
                        <td class="id">ID</td>
                        <td>Nombre</td>
                        <td>Correo Electronico</td>
                        <td>Celular</td>
                        <td>Descripcion del Motivo</td>
                        <td>Estado</td>
                        <td>F-A</td>
                        <td>H-A</td>
                        <td>Novedades</td>
                        <td colspan="2">Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
                        $query = "SELECT * FROM contactar ";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td class="id"><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Nombre'] ?></td>
                        <td><?php echo $row['Email'] ?></td>
                        <td><?php echo $row['Telefono'] ?></td>
                        <td><?php echo $row['Motivo'] ?></td>
                        <td><?php echo $row['Estado'] ?></td>
                        <td><?php echo $row['Fecha_Respuesta'] ?></td>
                        <td><?php echo $row['Hora_Respuesta'] ?></td>
                        <td><?php echo $row['Novedades'] ?></td>
                        <!-- <td><button class="chat"><i class='bx bx-message-detail'></i></button></td> -->
                        <td><button class="btn1"><a href="configuracion_mensage.php?id=<?php echo $row['Id'];?>" class="editar"><i class='bx bx-cog'></i></a></button></td>
                        <!-- <td><button class="btn2"><a href="eliminar.php?id=<?php echo $row['Id'];?>" class="borrar"><i class='bx bx-trash-alt'></i></a></button></td> -->
                    </tr>
                
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>

        <section id="Ventas" class="home-section4">
            <div class="texto">Ventas</div>
            <table>
                <thead>
                    <tr>
                        <td class="id">ID</td>
                        <td>Destino Salida</td>
                        <td>Destino Llegada</td>
                        <td>Ciudad de Origen</td>
                        <td>Fecha Salida</td>
                        <td>Fecha Regreso</td>
                        <td>Hora Salida</td>
                        <td>Hora Regreso</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>TD</td>
                        <td>Numero Documento</td>
                        <td>Correo Electronico</td>
                        <td>Celular</td>
                        <!-- <td colspan="2">Opciones</td> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
                        $query = "SELECT * FROM ventas ";
                        $resultado = $conexion->query($query);
                        while($row = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td class="id"><?php echo $row['Id'] ?></td>
                        <td><?php echo $row['Destino_Salida'] ?></td>
                        <td><?php echo $row['Destino_Llegada'] ?></td>
                        <td><?php echo $row['Ciudad_Origen'] ?></td>
                        <td><?php echo $row['Fecha_Salida'] ?></td>
                        <td><?php echo $row['Fecha_Regreso'] ?></td>
                        <td><?php echo $row['Hora_Salida'] ?></td>
                        <td><?php echo $row['Hora_Regreso'] ?></td>
                        <td><?php echo $row['Nombres'] ?></td>
                        <td><?php echo $row['Apellidos'] ?></td>
                        <td><?php echo $row['TD'] ?></td>
                        <td><?php echo $row['Numero_Documento'] ?></td>
                        <td><?php echo $row['Correo_Electronico'] ?></td>
                        <td><?php echo $row['Celular'] ?></td>
                        <!-- <td><a href="Eliminar_empleado.php?id=<?php echo $row['Id'];?>" class="borrar"><i class='bx bx-trash-alt'></i></a></td> -->
                    </tr>
                
                    <?php
                        }
                    ?>
                </tbody>
            </table>

        </section>
        
    </body>
    <script src="js/Paneldecontro.js"></script>
    <script src="js/Nuevoempleado.js"></script>
</html>
