let closed = document.querySelectorAll('.close2')[0];
let opened = document.querySelectorAll('#m-covid')[0];
let modalr = document.querySelectorAll('.ventana')[0];
let modale = document.querySelectorAll('.ventana-content')[0];

opened.addEventListener("click", function(e){
    e.preventDefault();
    modale.style.opacity ="1";
    modale.style.visibility ="visible";
    modalr.classList.toggle("ventana-close");
});

closed.addEventListener("click", function(){
    modalr.classList.toggle("ventana-close");

    setTimeout(function(){
        modale.style.opacity ="0";
        modale.style.visibility ="hidden";
    },200)
});

window.addEventListener("click", function(e){
    if(e.target == modale){
        modalr.classList.toggle("ventana-close");

        setTimeout(function(){
            modale.style.opacity ="0";
            modale.style.visibility ="hidden";
        },200)
    }
});