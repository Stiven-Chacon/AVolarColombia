const campana = document.querySelector('.campana');
const notify = document.querySelector('.seccion-notify');

campana.addEventListener('click',()=>{
    notify.classList.toggle("extender")
})

window.addEventListener('click', e=>{
    if(notify.classList.contains('extender') && e.target !=notify && e.target !=campana){
        notify.classList.toggle("extender")
    }
})