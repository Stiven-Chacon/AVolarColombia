const menu = document.querySelector('.menu');
const navegacion = document.querySelector('.menu-navegacion');
const botonfloat = document.querySelector('.content')

menu.addEventListener('click',()=>{
    navegacion.classList.toggle("spread");
    botonfloat.style.opacity = "0%";

})

window.addEventListener('click', e=>{
    if(navegacion.classList.contains('spread') && e.target !=navegacion && e.target !=menu){
        navegacion.classList.toggle("spread");
        botonfloat.style.opacity = "100%";
    }
})