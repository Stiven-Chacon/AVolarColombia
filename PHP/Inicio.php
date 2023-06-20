<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/ventanas-modal1.css">
    <link rel="stylesheet" href="css/ventanas-modal2.css">
    <link rel="stylesheet" href="css/ventanas-modal3.css">
    <link rel="stylesheet" href="css/ventanas-modal4.css">
    <!-- slider -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="js/flexslider.js"></script>
	<script src="js/jquery.flexslider.js"></script>
    <title>A Volar Colombia | Agencia de Viajes</title>
</head>
<body>
    <header>
        <!-- logo -->
        <img src="img/logos/logo2.png" class="logo" alt="">

        <!-- campana notify -->
        <button class="notificacion">
            <box-icon name='bell' color='#ffffff' size="md" class="campana" id="campana" animation='tada'></box-icon>
            <div class="num">
                <span class="subnum">2</span>
            </div>
        </button>
        <div class="seccion-notify">
            <div class="notify-header" style="font-size: 23px; text-align: center;">
                Panel de Notificaciones
            </div>
            <div class="contenido-notify"><br>
                <a href="" style="text-decoration: none; color: black;">
                    <div class="item-notify">
                        <h4>Planea tus vacaciones</h4>
                        <p style="font-size: 15px; text-align: justify;">Si quieres organizar tus vacaciones como tu quieres, gestiona tu plan aquí.</p>
                    </div>
                </a><br>
                <a href="" style="text-decoration: none; color: black; text-align: justify;">
                    <div class="item-notify">
                        <h4>Ver imformacion de mi vuelo</h4>
                        <p style="font-size: 15px;">Podras encontrar toda la imformacion sobre su vuelo o plan vacacional, imformacion aquí.</p>
                    </div>
                </a><br>
            </div>
        </div>

        <!-- menu interactivo -->
        <box-icon name='menu' id="menu"  color='#ffffff' class="menu" size="md" title="Menu"></box-icon>
        <nav class="menu-navegacion">
            <!-- <a href=""><box-icon name='file' color='#080808' class="icon-menu" size='md'></box-icon> Hacer Reserva</a> -->
            <a href="#inicio"><box-icon name='home' type='solid' color='#080808' class="icon-menu" size='md'></box-icon> Inicio</a>
            <a href="#planesnacionales"><box-icon type='solid' name='flag' class="icon-menu" size='md'></box-icon> Viajes Nacionales</a>
            <a href="#planesinternacionales"><box-icon type='solid' name='planet' class="icon-menu" size='md'></box-icon> Viajes Internacionales</a>
            <a href="#vuelos"><box-icon type='solid' name='plane-take-off' class="icon-menu" size='md'></box-icon> Vuelos</a>
            <!-- <a href=""><box-icon type='solid' name='offer' class="icon-menu" size='md'></box-icon> Ofertas</a> -->
            <a href="https://www.google.com/maps/?hl=es" target="_blank"><box-icon type='solid' name='map' class="icon-menu" size='md'></box-icon> Mapa</a>
            <!-- <a href=""><box-icon type='solid' name='plane-alt' class="icon-menu" size='md'></box-icon> Flota de Aviones</a> -->
            <a href="#contact-us"><box-icon type='solid' name='phone-call' class="icon-menu" size='md'></box-icon> Contacto</a>
        </nav> 

        <a href="login.html" class="iniciar">
            <box-icon type='solid' name='user' color='white' style="margin-top: 3px;"></box-icon>
            <p style="color: white; font-size: 15px; position: relative; top: -22px; margin-left: 30px;">Iniciar Sesión</p>
        </a>



    </header>

    <!-- slider de imgagenes -->
    

    <div class="flexslider" id="inicio">
		<ul class="slides">
			<li>
				<img src="img/img-slider/new york city.jpg" alt="">
				<section class="flex-caption">
					<div class="text">
                        <p>New York</p>
                    </div>
				</section>
			</li>
			<li>
				<img src="img/img-slider/miami.jpg" alt="">
				<section class="flex-caption">
                    <div class="text">
                        <p>Miami</p>
                    </div>
				</section>
			</li>
			<li>
				<img src="img/img-slider/Medellin-Colombia.jpg" alt="">
				<section class="flex-caption">
					<div class="text">
                        <p>Colombia</p>
                    </div>
				</section>
			</li>
			<li>
				<img src="img/img-slider/españa.jpg" alt="">
				<section class="flex-caption">
					<div class="text">
                        <p>España</p>
                    </div>
				</section>
			</li>
			<li>
				<img src="img/img-slider/Mexico.jpg" alt="">
				<section class="flex-caption">
					<div class="text">
                        <p>Mexico</p>
                    </div>
				</section>
			</li>
			<li>
				<img src="img/img-slider/toronto.jpg" alt="">
				<section class="flex-caption">
					<div class="text">
                        <p>Toronto</p>
                    </div>
				</section>
			</li>
		</ul>
	</div>

    <!--wave-->
    <div class="wave" style="height: 110px; overflow: hidden;"><svg viewBox="0 0 500 150"                      
        preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #eeeeee">
        </path></svg>
    </div>

    <!-- planes turisticos nacionales -->
    <div class="contenedor1" id="planesnacionales">
        <h1 class="titulonacionales">Planes Nacionales</h1><br>
        <div class="contenido1" id="contenido1">
            <?php
                $conexion = mysqli_connect("localhost" , "root" , "1079173782" , "avolar_colombia") or die ("Error");
                $query = "SELECT * FROM planes_nacionales ";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){
            ?>
            <div class="item" id="item">
                <a href="P_nacionales/santamarta.html"  style="text-decoration: none;">
                    <img src="P_nacionales/img-destinos/santamarta/2.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">PAQUETE</p>
                        <br>
                        <h2 class="ntour"><?php echo $row['destino_ida'] ?><span>-</span><?php echo $row['destino_regreso'] ?></h2>
                        <h2 class="hotel"><?php echo $row['hotel'] ?></h2>
                        <h4 class="dias" ><?php echo $row['dias'] ?></h4><br>
                        <p class="incluye"><?php echo $row['incluye'] ?></p><br>
                        <p class="desde" >Desde</p>
                        <p class="precio"><?php echo $row['precio'] ?></p>
                        <p class="persona">Por persona</p>
                    </div>
                    <input type="button" value="Ver Paquete" class="btnver">
                </a>
            </div>
            <?php
                }
            ?>
        </div>
        <a href="P_nacionales/Planes-nacionales.html"><button style="position: relative; bottom: 30px; left: 70px; width: 150px; height: 30px; cursor: pointer;">&#x2795 Ver Mas Paquetes</button></a>
    </div>
    <!-- planes turisticos internacionales -->
    <div class="contenedor2" id="planesinternacionales"><br>
        <h1 class="titulonacionales">Planes Internacionales</h1><br>
        <div class="contenido1" id="contenido2">
            <div class="item" id="item2">
                <a href="P_internacionales/New-York.html"  style="text-decoration: none;" target="_blank">
                    <img src="P_internacionales/img-destinos/New York/2.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">PAQUETE</p>
                        <br>
                        <h2 class="ntour">Bogotá - New York</h2>
                        <h2 class="hotel">Hotel 57</h2>
                        <h4 class="dias">5 dias / 4 noches</h4><br>
                        <p class="incluye">Tiquetes - Alojamiento</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 5.500.000</p>
                        <p class="persona">Por persona</p>
                    </div>
                    <input type="button" value="Ver Paquete" class="btnver">
                </a>
            </div>
            <div class="item" id="item2">
                <a href=""  style="text-decoration: none;" target="_blank">
                    <img src="P_internacionales/img-destinos/Mexico/Mexico.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">PAQUETE</p>
                        <br>
                        <h2 class="ntour">Medellin - Cancun </h2>
                        <h2 class="hotel">Hotel Emporio Cancún</h2>
                        <h4 class="dias">4 dias / 3 noches</h4><br>
                        <p class="incluye">Tiquetes - Alojamiento</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 3.500.000</p>
                        <p class="persona">Por persona</p>
                    </div>
                    <input type="button" value="Ver Paquete" class="btnver">
                </a>
            </div>
            <div class="item" id="item2">
                <a href=""  style="text-decoration: none;" target="_blank">
                    <img src="P_internacionales/img-destinos/España/españa.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">PAQUETE</p>
                        <br>
                        <h2 class="ntour">Bogotá - Barcelona</h2>
                        <h2 class="hotel">Hotel Condal Barcelona</h2>
                        <h4 class="dias">4 dias / 3 noches</h4><br>
                        <p class="incluye">Tiquetes - Alojamiento</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 3.500.000</p>
                        <p class="persona">Por persona</p>
                    </div>
                    <input type="button" value="Ver Paquete" class="btnver">
                </a>
            </div>
            <div class="item" id="item2">
                <a href=""  style="text-decoration: none;" target="_blank">
                    <img src="P_internacionales/img-destinos/Miami/miami.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">PAQUETE</p>
                        <br>
                        <h2 class="ntour">Bogotá - Miami</h2>
                        <h2 class="hotel">Hotel Boutique Maree</h2>
                        <h4 class="dias">4 dias / 3 noches</h4><br>
                        <p class="incluye">Tiquetes - Alojamiento</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 2.500.000</p>
                        <p class="persona">Por persona</p>
                    </div>
                    <input type="button" value="Ver Paquete" class="btnver">
                </a>
            </div>
            
        </div>
        <a href="P_internacionales/Planes-internacionales.html"><button style="position: relative; bottom: 30px; left: 70px; width: 150px; height: 30px; cursor: pointer; ">&#x2795 Ver Mas Paquetes</button></a>
    </div>

    <!-- Seccion de Vuelos -->
    <div class="contenedor3" id="vuelos"><br>
        <h1 class="titulonacionales">Vuelos</h1><br>
        <div class="contenido1" id="contenido3">
            <div class="item" id="item">
                <a href=""  style="text-decoration: none;" target="_blank"> 
                    <img src="Vuelos/Img-destinos/Miami/miami.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">Vuelo</p>
                        <br>
                        <h2 class="hotel">Miami</h2><br>
                        <p class="incluye">Ida - Vuelta</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 1.500.000</p>
                        <p class="persona">Por Persona</p>
                    </div>
                    <input type="button" value="Ver Vuelo" class="btnver">
                </a>
            </div>
            <div class="item" id="item">
                <a href=""  style="text-decoration: none;" target="_blank"> 
                    <img src="Vuelos/Img-destinos/Neiva/Neiva.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">Vuelo</p>
                        <br>
                        <h2 class="hotel">Neiva</h2><br>
                        <p class="incluye">Ida</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 60.000</p>
                        <p class="persona">Por Persona</p>
                    </div>
                    <input type="button" value="Ver Vuelo" class="btnver">
                </a>
            </div>
            <div class="item" id="item">
                <a href=""  style="text-decoration: none;" target="_blank"> 
                    <img src="Vuelos/Img-destinos/Bogota/bogota.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">Vuelo</p>
                        <br>
                        <h2 class="hotel">Bogotá</h2><br>
                        <p class="incluye">Ida</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 80.000</p>
                        <p class="persona">Por Persona</p>
                    </div>
                    <input type="button" value="Ver Vuelo" class="btnver">
                </a>
            </div>
            <div class="item" id="item">
                <a href=""  style="text-decoration: none;" target="_blank"> 
                    <img src="Vuelos/Img-destinos/Los Angeles/los angeles.jpg" alt="" class="img-item">
                    <div class="informacion">
                        <p class="paquete">Vuelo</p>
                        <br>
                        <h2 class="hotel">Los Angeles</h2><br>
                        <p class="incluye">Ida - Vuelta</p><br>
                        <p class="desde">Desde</p>
                        <p class="precio">COP 1.800.000</p>
                        <p class="persona">Por Persona</p>
                    </div>
                    <input type="button" value="Ver Vuelo" class="btnver">
                </a>
            </div>
            
        </div>
        <a href="Vuelos/Vuelos.html"><button style="position: relative; bottom: 30px; left: 70px; width: 150px; height: 30px; cursor: pointer; ">&#x2795 Ver Mas Vuelos</button></a>
    </div>

    <div class="contenedor4" id="informacion"><br><br>
        <h1 class="tituloinformacion">Información</h1><br><br><br>
        <div class="contenido" id="informacion">
            <div class="items">
                <button class="botones" id="m-pagos"><box-icon name='dollar' color='#04ad20' size='lg'></box-icon> <br><p style="font-size: 15px; font-weight: bold;">Medios de Pago</p></button><br><br>
            </div>
            <div class="items">
                <button class="botones" id="m-covid"><box-icon name='virus' type='solid' color='#fb93ec' size='lg'></box-icon></box-icon> <br><p style="font-size: 15px; font-weight: bold; text-align: center;">Covid - 19</p></button><br><br>
            </div>
            
            <div class="items">
                <button class="botones" id="info-viajar"><box-icon name='briefcase-alt' type='solid' color='#6f3802' size='lg'></box-icon> <br><p style="font-size: 15px; font-weight: bold;">Recomendaciones al Viajar</p></button><br><br>
            </div>

            <div class="items">
                <button class="botones" id="contactar"><box-icon name='mail-send' color='#fd0307' size='lg'></box-icon> <br><p style="font-size: 15px; font-weight: bold;">Contactame</p></button><br><br>
            </div>

        </div>

        <!-- ventanas modal1 = medios de pago -->
        
        <div class="modal-content">
            <div class="modal modal-close">
                <p class="close"><box-icon name='x' size='md'></box-icon></p><br>
                <img src="img/logos/medios de pago.png" alt="">
                <section class="modal-texto">
                    <p></p>
                </section>
            </div>
        </div>

        <!-- ventanas modal2 = informacion sobre el covid -->

        <div class="ventana-content">
            <div class="ventana ventana-close">
                <h2 style="margin-left: 20px; margin-top: 13px; color: white; font-size: 25px;">Información sobre el COVID-19</h2>
                <p class="close2"><box-icon name='x' size='md' color='white'></box-icon></p>
                <div class="modal-texto">
                    <div class="texto">
                        <p class="subtitulo">¿Que es la COVID-19?</p><br>

                        <p style="text-align: justify;">La COVID-19 es la enfermedad causada por el nuevo   coronavirus conocido como SARS-CoV-2. La OMS tuvo noticia por primera vez de la existencia    de este nuevo virus el 31 de diciembre de 2019, al ser informada de un grupo de casos de   «neumonía vírica» que se habían declarado en Wuhan (República Popular China).</p>

                        <p class="subtitulo">¿Cuales son los Sintomas de la COVID-19</p><br>

                        <P style="text-align: start;">Los síntomas más habituales de la COVID-19 son: </P><br>
                        <li style="margin-left: 25px;">Fiebre</li>
                        <li style="margin-left: 25px;">Tos seca</li>
                        <li style="margin-left: 25px;">Cansancio</li><br>

                        <P style="text-align: start;">Otros síntomas menos frecuentes y que pueden afectan a    algunos pacientes:</P><br>
                        <li style="margin-left: 25px;">Perdida del gusto o el olfato</li>
                        <li style="margin-left: 25px;">Congestión nasal</li>
                        <li style="margin-left: 25px;">Conjuntivitis</li>
                        <li style="margin-left: 25px;">Dolor de garganta</li>
                        <li style="margin-left: 25px;">Dolor de cabeza</li>
                        <li style="margin-left: 25px;">Dolores musculares o articulares</li>
                        <li style="margin-left: 25px;">Diferentes tipos de erupciones cutáneas</li>
                        <li style="margin-left: 25px;">Nauseas o Vómitos</li>
                        <li style="margin-left: 25px;">Diarrea</li>
                        <li style="margin-left: 25px;">Escalofríos o Vértigo</li><br>

                        <P style="text-align: start;">Entre los síntomas de un cuadro grave de la COVID-19 se incluyen: </P><br>
                        <li style="margin-left: 25px;">Disnea (dificultad para respirar)</li>
                        <li style="margin-left: 25px;">Perdida de apetito</li>
                        <li style="margin-left: 25px;">Confusión</li>
                        <li style="margin-left: 25px;">Dolor o presion persistente en el pecho</li>
                        <li style="margin-left: 25px;">Temperatura alta mayor a los 38°C</li><br>

                        <p class="subtitulo">¿Como evitar contraer el virus del COVID-19?</p><br>

                        <p style="text-align: justify;">Protéjase adoptando algunas precauciones sencillas, como mantener el distanciamiento físico; utilizar mascarilla, especialmente cuando no se pueda mantener el distanciamiento; mantener las habitaciones bien ventiladas; evitar las aglomeraciones y el contacto estrecho con otras personas; lavarse las manos de forma periódica; y toser cubriéndose con el codo flexionado o con un pañuelo. Consulte las recomendaciones que se den a nivel local en su lugar de residencia y trabajo. ¡Hágalo todo!</p>

                        <p class="subtitulo">¿Que ocurre a las personas que contraen el COVID-19?</p><br>

                        <p style="text-align: justify;">Entre las personas que desarrollan síntomas, la mayoría (alrededor del 80%) se recuperan de la enfermedad sin necesidad de recibir tratamiento hospitalario. Alrededor del 15% desarrollan una enfermedad grave y requieren oxígeno y el 5% llegan a un estado crítico y precisan cuidados intensivos. <br><br>Entre las complicaciones que pueden llevar a la muerte se encuentran la insuficiencia respiratoria, el síndrome de dificultad respiratoria aguda, la septicemia y el choque septicémico, la tromboembolia y/o la insuficiencia multiorgánica, incluidas las lesiones cardíacas, hepáticas y renales.<br><br>Rara vez, los niños pueden manifestar un síndrome inflamatorio grave unas semanas después de la infección.</p><br>

                        <p class="subtitulo">¿Quien corre mayor riesgo de presentar un cuadro grave de COVID-19?</p><br>

                        <p style="text-align: justify;">Las personas de más de 60 años y las que padecen afecciones médicas subyacentes, como hipertensión arterial, problemas cardíacos o pulmonares, diabetes, obesidad o cáncer, corren un mayor riesgo de presentar cuadros graves. Sin embargo, cualquier persona, a cualquier edad, puede enfermar de COVID-19 y presentar un cuadro grave o morir.</p><br>

                        <p class="subtitulo">¿Cuanto tiempo tarda en aparecer los sintomas del COVID-19?</p><br>

                        <p style="text-align: justify;">El tiempo entre la exposición a la COVID-19 y el momento en que comienzan los síntomas es, de media, de 5 o 6 días, pero puede variar entre 1 y 14 días. Por ello se recomienda que las personas que hayan estado expuestas al virus se queden en casa, alejadas de otras personas, durante 14 días, con el fin de prevenir la propagación del virus, especialmente cuando no es fácil hacerse una prueba.</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- ventana modal3 = recomendaciones a la hora de viajar -->

        <div class="vtn-content">
            <div class="vtn vtn-close">
                <h2 style="font-size: 25px; margin-top: 15px; margin-left: 20px;color: white;">Recomendaciones al viajar</h2>
                <p class="close3"><box-icon name='x' size='md' color='white'></box-icon></p>
                <div class="vtn-texto"><br>
                    <div class="texto3">
                        
                        <div class="contents">
                            <div class="title"><br>
                                <div class="icn">
                                    <box-icon name='home' type='solid' color='#ffffff' size='lg'></box-icon>
                                </div>
                                <p class="subtitulo3"> Antes de Tomar el Avion</p><br>
                            </div>
                            <ol start="1" style="margin: 30px;">
                                <li style="margin-left: 25px; font-size: 20px;">Incluye todos tus datos completos en la reserva para notificarte de cualquier novedad en tu vuelo. </li>
                                <li style="margin-left: 25px; font-size: 20px;">Visita tu médico y consultale si debes tomar alguna medida preventiva, dependiendo de tu estado de salud para realizar el viaje.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Consulta los horarios sugeridos para llegar al aeropuerto a tiempo según tu tipo de vuelo y registro de equipaje.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Verifica con anterioridad la documentación necesaria para evitar inconvenientes en los diferentes filtros del aeropuerto.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Haz el check-in online hasta 3 horas antes del vuelo y obten el pasabordo y con esto evitarás largas filas en el aeropuerto.</li>
                            </ol>
                        </div><br>
                        <div class="contents">
                            <div class="title"><br>
                                <div class="icn">
                                    <box-icon type='solid' name='plane' size='lg' color='white'></box-icon>
                                </div>
                                <p class="subtitulo3"> En el Aeropuerto</p><br>
                            </div>
                            <ol start="1" style="margin: 30px;">
                                <li style="margin-left: 25px; font-size: 20px;">Ubica los diferentes puntos claves del aeropuerto como: Módulos de chequeo, entrada a migración, entrada a las salas de abordaje.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Encuentra el número de la sala de abordaje  en las pantallas distribuidas en el aeropuerto. Teniendo en cuenta que esta podria variar.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Realiza el proceso de migración y seguridad con tiempo, en algunas ocaciones puede estar congestionado</li>
                            </ol>
                        </div><br>
                        <div class="contents">
                            <div class="title"><br>
                                <div class="icn">
                                    <box-icon name='business' type='solid' color='#fbf7f7' size='lg'></box-icon>
                                </div>
                                <p class="subtitulo3"> En la Sala de Abordaje</p><br>
                            </div>
                            <ol start="1" style="margin: 30px;">
                                <li style="margin-left: 25px; font-size: 20px;">Ya en la sala de abordaje, presta atención a los anuncios que indicarán el orden  de filas de abordaje para que el proceso sea más fluido.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Si ingresas a Salas VIP, tendras que consumir alimentos y bebidas unicamente dentro de la sala.</li>
                            </ol>
                        </div><br>
                        <div class="contents">
                            <div class="title"><br>
                                <div class="icn">
                                    <box-icon type='solid' name='plane-take-off' size='lg' color='white'></box-icon>
                                </div>
                                <p class="subtitulo3"> Durante el Vuelo</p><br>
                            </div>
                            <ol start="1" style="margin: 30px;">
                                <li style="margin-left: 25px; font-size: 20px;">Escucha la informacion que la tripulacion te indique a bordo. Y es importante que sigas las instrucciones de seguridad, por tu seguridad y la de los demas.</li>
                                <li style="margin-left: 25px; font-size: 20px;">Los elementos del avión son de uso durante el vuelo. No olvides entregarlos al bajar del avión.</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <!-- ventana modal4 = ventana de contacto -->

        <div class="vtn2-content">
            <div class="vtn2 vtn2-close">
                <h2 style="margin-left: 20px; margin-top: 15px; font-size: 25px; color: white;">Contactame</h2>
                <p class="close4"><box-icon name='x' size='md' color='white'></box-icon></p>
                <div class="vtn2-texto">
                    <div class="contents2">
                        <form action="Contactar.php" method="POST">
                            <div class="formulario"><br>
                                <label class="form-label">Nombre Completo:</label><br>
                                <input type="text" class="form-nombre" name="nombre" autocomplete="off" onkeyup="javascript:this.value=this.value.toUpperCase();"><br>
                                <label class="form-label">Correo Electronico:</label><br>
                                <input type="email" class="form-email" name="email" autocomplete="off"><br>
                                <label for="" class="form-label">Telefono:</label><br>
                                <input type="tel" class="form-telefono" name="telefono" autocomplete="off"><br>
                                <label class="form-label">Escriba El Motivo:</label>
                                <textarea class="form-comen" name="motivo" rows="3" placeholder="Escriba aqui cual es el motivo por el cual quiere que lo contactemos"></textarea><br>
                                <input type="reset" value="Limpiar Todo" class="limp">
                                <input type="submit" class="botonen" value="Enviar Datos" name="enviar"><br><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- boton flotante -->

    <div class="content">
        <button class="botonf1" >
            <span><box-icon name='support' color='#f3eded' size='md' animation='flashing'></box-icon></span>
        </button>

        <form action="tel:3132157089">
            <button class="btn botonf2" >
                <span><box-icon name='phone-call' type='solid' color='#f3eded' ></box-icon></span>
            </button>
        </form>

        <form action="https://wa.link/0xk4iv">
            <button class="btn botonf3" >
                <span><box-icon name='whatsapp' type='logo' color='#f8f8f8'  ></box-icon></span>
            </button>
        </form>

        <form action="">
            <button class="btn botonf4" >
                <span><box-icon name='envelope-open'  color='#f9f6f6' ></box-@icon></span>
            </button>
        </form>

        <!-- <form action="">
            <button class="btn botonf5" >
                </span><box-icon name='conversation'  color='#fefefe'></box-icon>
            </button>
        </form> -->

        <button class="btn salir" >
            </span><box-icon name='x' color='black' ></box-icon></span>
        </button>
    </div>

    <!-- footer -->
    <footer>
        <img src="img/logos/logo2.png" class="logo-footer">
        <div class="contact-us" id="contact-us">
            <p>Nit: 000.111.22-3</p>
            <p>Dirección: Cll 123 N° 12-4</p>
            <p>Telefono: 1122334455</p>
            <p>Creada por: ----------</p>
        </div>
        <div class="info">
            <a href="" class="enlaces1">Acerca de Nosotros  </a><br>
            <a href="" class="enlaces1" id="m-covid">Informacion Sobre el Coronavirus</a><br>
            <a href="" class="enlaces1">Restricciones por Coronavirus</a><br>
            <a href="" class="enlaces1">Recomendaciones al viajar</a><br>
        </div>
        <div class="social-media">
            <a href="./" class="social-media-icon">
                <box-icon name='facebook' type='logo' size='md'></box-icon>
            </a>
            <a href="https://wa.link/0xk4iv" class="social-media-icon">
                <box-icon type='logo' name='whatsapp' size='md'></box-icon>
            </a>
            <a href="./" class="social-media-icon">
                <box-icon type='logo' name='instagram' size='md'></box-icon>
            </a>
        </div>
    </footer>
    <script src="js/ventana-modal.js"></script>
    <script src="js/ventana-modal2.js"></script>
    <script src="js/ventana-modal3.js"></script>
    <script src="js/ventana-modal4.js"></script>
    <script src="js/header.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/notify.js"></script>
    <script src="js/btn-float.js"></script>
</body>
</html>