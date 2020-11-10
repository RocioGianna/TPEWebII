"use strict";

document.addEventListener("DOMContentLoaded",  function (){
    let btnVerMas = document.querySelectorAll(".btnVerMas");
    for(let i = 0 ; i < btnVerMas.length;i++){
        btnVerMas[i].addEventListener("click", paginaProducto);
    }
    let btnSuscribir = document.querySelector(".suscribir");
    btnSuscribir.addEventListener("click", paginaSuscribir);
    //let linkReparto = document.querySelector(".linkReparto");
    //linkReparto.addEventListener("click", paginaReparto);

    async function paginaProducto(){
        let principal = document.querySelector("main");
        let promesa = fetch("fetch/producto.html");
        let response = await promesa;
        principal.innerHTML = await response.text();
        return true;
    }

    async function paginaSuscribir(){
        let principal2 = document.querySelector("main");
        let promesa = fetch("fetch/suscribir.html");
        let response = await promesa;
        principal2.innerHTML = await response.text();
        return true;
    }

    async function paginaReparto(){
        let principal = document.querySelector("main");
        let promesa = fetch("fetch/reparto.html");
        let response = await promesa;
        principal.innerHTML = await response.text();
        return true;
    }
});