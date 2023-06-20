var campo = document.querySelector('.email');

function alerta1(){
    if (campo=1){
        swal.fire({
            icon: "success",
            title:"Recuperacion Exitosa",
            text:"Revisa tu direccion de correo elctronico alli enviamos la contraseña de tu cuenta"
        })
    }

    else{
        alert('el campo esta vacio');
    }
}
