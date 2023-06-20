const boton = document.querySelector(".botonf1")
const boton2 = document.querySelector(".salir")
const footer = document.querySelector(".footer")

$('.botonf1').click(function () {
    $('.btn').addClass('animacionVer');
    boton.style.opacity="0%";
    boton.style.rotate="360deg";
    boton2.style.rotate="360deg";
    $('.salir').click(function () {
        $('.btn').removeClass('animacionVer');
        boton2.style.rotate="0deg"
        boton.style.opacity="100%";
        boton.style.rotate="0deg";
    });
});



