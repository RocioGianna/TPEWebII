"uses strict";

document.addEventListener("DOMContentLoaded", CargarPagina)

function CargarPagina() {
    cambiarCapcha();
    let btnRegistrar = document.getElementById("verificar");
    btnRegistrar.addEventListener('click', registrar);
    let btnCambiar = document.getElementById("cambiarCapcha");
    btnCambiar.addEventListener('click', cambiarCapcha);
}

let d;

function cambiarCapcha() {
    d = Math.floor(Math.random() * 6 + 1);
    let i = document.getElementById('lugarImg');
    i.src = "captcha/capcha" + d + ".png";
    document.querySelector("#lugarImg").src = i.src;
}

    
    function registrar() {
    let n = document.querySelector("#campoCapcha").value;
    let v1 = "qGphJD"
    let v2 = "RBSKW"
    let v3 = "UXP4D"
    let v4 = "TSMS9"
    let v5 = "R84CH"
    let v6 = "3M56R"

    function confirmar(){
        let aparece= document.getElementById("confirmacion");
        let desaparece = document.getElementById("inputHidden");
        aparece.classList.toggle("show");
        desaparece.classList.toggle("hidden")
    }
    
    function fallo(){
        let aparece= document.getElementById("error");
        let desaparece = document.getElementById("inputHidden");
        aparece.classList.toggle("show");
        desaparece.classList.toggle("hidden");
    }
    
    if (d == 1) {
        if (n == v1) {
            confirmar();
            setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
         }
    }
    if (d == 2) {
        if (n == v2) {
            confirmar();
            setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
        }
    }
    if (d == 3) {
        if (n == v3) {
           confirmar();
           setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
        }
    }
    if (d == 4) {
        if (n == v4) {
            confirmar();
            setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
        }
    }
    if (d == 5) {
        if (n == v5) {
            confirmar();
            setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
        }
    }
    if (d == 6) {
        if (n == v6) {
            confirmar();
            setTimeout(confirmar, 2000);
        } else {
            fallo();
            setTimeout(fallo, 2000);
        }
    }
}

