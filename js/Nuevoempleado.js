let closedd1 = document.querySelectorAll('.close4')[0];
let openedd1 = document.querySelectorAll('#agregar')[0];
let modalrs1 = document.querySelectorAll('.vtn2')[0];
let modales1 = document.querySelectorAll('.vtn2-content')[0];

openedd1.addEventListener("click", function(e){
    e.preventDefault();
    modales1.style.opacity ="1";
    modales1.style.visibility ="visible";
    modalrs1.classList.toggle("vtn2-close");
});

closedd1.addEventListener("click", function(){
    modalrs1.classList.toggle("vtn2-close");

    setTimeout(function(){
        modales1.style.opacity ="0";
        modales1.style.visibility ="hidden";
    },200)
});

window.addEventListener("click", function(e){
    if(e.target == modales1){
        modalrs1.classList.toggle("vtn2-close");

        setTimeout(function(){
            modales1.style.opacity ="0";
            modales1.style.visibility ="hidden";
        },200)
    }
});