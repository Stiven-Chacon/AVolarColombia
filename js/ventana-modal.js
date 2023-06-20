let cerrar = document.querySelectorAll('.close')[0];
let abrir = document.querySelectorAll('#m-pagos')[0];
let modal = document.querySelectorAll('.modal')[0];
let modalc = document.querySelectorAll('.modal-content')[0];

abrir.addEventListener("click", function(e){
    e.preventDefault();
    modalc.style.opacity ="1";
    modalc.style.visibility ="visible";
    modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click", function(){
    modal.classList.toggle("modal-close");

    setTimeout(function(){
        modalc.style.opacity ="0";
        modalc.style.visibility ="hidden";
    },200)
});

window.addEventListener("click", function(e){
    if(e.target == modalc){
        modal.classList.toggle("modal-close");

        setTimeout(function(){
            modalc.style.opacity ="0";
            modalc.style.visibility ="hidden";
        },200)
    }
})