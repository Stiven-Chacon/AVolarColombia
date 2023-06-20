let closedd = document.querySelectorAll('.close3')[0];
let openedd = document.querySelectorAll('#info-viajar')[0];
let modalrs = document.querySelectorAll('.vtn')[0];
let modales = document.querySelectorAll('.vtn-content')[0];

openedd.addEventListener("click", function(e){
    e.preventDefault();
    modales.style.opacity ="1";
    modales.style.visibility ="visible";
    modalrs.classList.toggle("vtn-close");
});

closedd.addEventListener("click", function(){
    modalrs.classList.toggle("vtn-close");

    setTimeout(function(){
        modales.style.opacity ="0";
        modales.style.visibility ="hidden";
    },200)
});

window.addEventListener("click", function(e){
    if(e.target == modales){
        modalrs.classList.toggle("vtn-close");

        setTimeout(function(){
            modales.style.opacity ="0";
            modales.style.visibility ="hidden";
        },200)
    }
});