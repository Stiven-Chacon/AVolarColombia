
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <link rel="shortcut icon" href="img/logos/icono2.png" type="image/x-icon">
    <link rel="stylesheet" href="css/reserva.css">
    <title>Formulario De Reserva</title>
</head>
<body>
    <div class="formato">
        <div class="encabe">
            <a href="#info1" style="position: relative; top:13px; left: 10px; font-size:25px;" class="flecha1">❮ Anterior</a>
            <h2 class="titulo">Formulario De Reserva</h2>
            <a href="#info2" style="position: relative; top:-63px; left: 1020px; font-size:25px;" class="flecha2">Siguiente ❯</a>
        </div>
    
        <div class="content">
            <form action="reserva.php" method="post" class="formulario">
                <div id="info1">
                    <br><br><br><br>
                    <h2>Información Del Vuelo</h2><br><br><br>
                    <div class="d1">
                        <p class="sub">Destino De Salida</p>
                        <box-icon type='solid' name='plane-take-off' color='rgba(150, 150, 150, 0.856)' size='md' style="position: relative; top: 12px;"></box-icon><input type="text" name="ds" id="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="d2">
                        <p class="sub">Destino De Llegada</p>
                        <box-icon type='solid' name='plane-land' color='rgba(150, 150, 150, 0.856)' size='md' style="position: relative; top: 12px;"></box-icon><input type="text" name="df" id="" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="origen">
                        <p class="sub">Ciudad De Origen</p>
                        <select class="form-ciudad" id="" name="ciudad">
                            <option value="No Selecciono">-</option>
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
                    <div class="d3">
                        <p class="sub">Fecha De Salida</p>
                        <box-icon name='calendar' color='rgba(150, 150, 150, 0.856)' size='md' style="position: relative; top: 10px;"></box-icon><input type="date" name="fs" id="">
                    </div>
                    <div class="d4">
                        <p class="sub">Fecha De Regreso</p>
                        <box-icon type="solid" name='calendar-event' color='rgba(150, 150, 150, 0.856)' size='md' style="position: relative; top: 10px;"></box-icon><input type="date" name="fr" id="">
                    </div>
                    <div class="d5">
                        <p class="sub">Hora De Salida</p>
                        <select name="hs" id="" class="hora">
                            <option value="No selecciono">-</option>
                            <option value="7:00 am">7:00 am</option>
                            <option value="9:00 am">9:00 am</option>
                            <option value="11:00 am">11:00 am</option>
                            <option value="12:30 pm">12:30 pm</option>
                            <option value="2:00 pm">2:00 pm</option>
                            <option value="3:30 pm">3:30 pm</option>
                            <option value="6:00 pm">6:00 pm</option>
                            <option value="8:40 pm">8:40 pm</option>
                            <option value="10:00 pm">10:00 pm</option>
                            <option value="11:20 pm">11:20 pm</option>
                        </select>
                    </div>
                    <div class="d6">
                        <p class="sub">Hora De Regreso</p>
                        <select name="hr" id="" class="hora">
                            <option value="No selecciono">-</option>
                            <option value="7:00 am">7:00 am</option>
                            <option value="9:00 am">9:00 am</option>
                            <option value="11:00 am">11:00 am</option>
                            <option value="12:30 pm">12:30 pm</option>
                            <option value="2:00 pm">2:00 pm</option>
                            <option value="3:30 pm">3:30 pm</option>
                            <option value="6:00 pm">6:00 pm</option>
                            <option value="8:40 pm">8:40 pm</option>
                            <option value="10:00 pm">10:00 pm</option>
                            <option value="11:20 pm">11:20 pm</option>
                        </select>
                    </div>
                </div><br><br><br><br>
                <div id="info2"><br><br><br><br>
                    <h2>Información Personal</h2><br><br><br>
                    <div class="d7">
                        <p class="sub">Nombres Completos</p>
                        <input type="text" name="nombre" id="" style="width: 320px;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                    <div class="d8">
                        <p class="sub">Apellidos Completos</p>
                        <input type="text" name="apellido" id="" style="width: 320px;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div><br><br>
                    <div class="d9">
                        <p class="sub">Documento De Identificación:</p>
                        <select name="td" id="" class="td">
                            <option value="No selecciono">-</option>
                            <option value="CC">CC</option>
                            <option value="CE">CE</option>
                            <option value="PA">PA</option>
                        </select>
                        <input type="text" name="nd" id="" style="width: 255px;" placeholder="Digite sin puntos">
                    </div>
                    <br><br>
                    <div class="d10">
                        <p class="sub">Correo Electronico</p>
                        <input type="text" name="correo" id="" style="width: 320px;">
                    </div><br><br>
                    <div class="d11">
                        <p class="sub">Celular</p>
                        <input type="text" name="celular" id="" style="width: 320px;">
                    </div>
                    <div class="valor">
                        <div class="content2">
                            <div>Destino: <p style="position: relative; left:170px; top:-15px; color:teal">NEV <span><box-icon name='transfer-alt' size='xs'></box-icon></span> STM</p></div><br>
                            <div style="margin-top: -20px;">Duración: <p style="position: relative; left:170px; top:-15px; color:teal">5 Dias</p></div><br>
                            <div style="margin-top: -20px;">Tiquetes: <p style="position: relative; left:170px; top:-15px; color:teal">Ida - Vuelta</p></div><br>
                            <div style="margin-top: -20px;">Operador: <p style="position: relative; left:170px; top:-15px; color:teal">A Volar Colombia</p></div><br>
                            <div style="margin-top: -20px;">Valor Vuelo: <p style="position: relative; left:170px; top:-15px; color:teal">COP 500.000</p></div><br>
                            <div style="margin-top: -20px;">Valor Hotel: <p style="position: relative; left:170px; top:-15px; color:teal">COP 100.000</p></div><br>
                            <div style="margin-top: -20px;">Impuestos (%Iva): <p style="position: relative; left:170px; top:-15px; color:teal">COP 20.000</p></div><br>
                            <div style="margin-top: -20px;">Valor Total: <p style="position: relative; left:170px; top:-15px; color:teal">COP 1'020.000</p></div><br>
                        </div>
                    </div>
                    <input type="submit" value="Reservar Paquete" class="boton" name="reserva">
                </div>
            </form>
        </div>
    </div>
</body>
</html>