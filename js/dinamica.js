"use strict";

document.addEventListener("DOMContentLoaded", cargarPagina);
function cargarPagina(){
    buscarJson();
    let divEditar = document.getElementById("divEditar");
    divEditar.classList.add("ocultar");
    let btnAgregar = document.getElementById("btnAgregar").addEventListener("click", ingresar) 
    let btnCrear = document.getElementById("btnCrearItems").addEventListener("click", crear);
    let btnBorrar = document.getElementById("btnBorrarElem").addEventListener("click", borrarP);
    let btnRestablecer = document.getElementById("btnRestablecer").addEventListener("click", restablecer);
    let btnFiltrar = document.getElementById("btnFiltrar").addEventListener("click", filtrar);
}   

async function buscarJson(){
    let url = "https://web-unicen.herokuapp.com/api/groups/009RocioLionel/reparto";
        let structura = document.getElementById("bodyTabla");
        let r = await fetch(url);
        let json = await r.json();
        console.log(json);
        let paisJson = "";
        let ciudadJson = "";
        let precioJson = "";
        let tiempoJson = "";
        for (const elem of json.reparto) {
            let tr = document.createElement("tr");
            let td1 = document.createElement("td");
            td1.classList.add("pais");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");
            let td4 = document.createElement("td");
            let btnEliminar = document.createElement("button");
            btnEliminar.innerHTML = "Borrar";
            btnEliminar.classList.add("btnTabla");
            let id = elem._id;
            btnEliminar.addEventListener("click", function(){
                this.parentElement.classList.add("ocultar");
                borrarFila(id);
            });
            let btnEditar = document.createElement("button");
            btnEditar.innerHTML = "Editar";
            btnEditar.classList.add("btnTabla");
            btnEditar.addEventListener("click", function(){
                editarFila(id);
            });
            
            paisJson = elem.thing.pais;
            td1.innerHTML = paisJson;
            ciudadJson = elem.thing.ciudad;
            td2.innerHTML = ciudadJson;
            precioJson = elem.thing.precio;
            td3.innerHTML = precioJson;
            tiempoJson = elem.thing.tiempo;
            td4.innerHTML = tiempoJson;
            tr.appendChild(td1);                
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);
            tr.appendChild(btnEliminar);
            tr.appendChild(btnEditar);
            structura.appendChild(tr);
        }
}
async function borrarFila(id){
    let url = "https://web-unicen.herokuapp.com/api/groups/009RocioLionel/reparto";
    let r = await fetch(url + "/" + id,{
        "method":"DELETE",
    });
    let json = await r.json();
    console.log(json);
}

    function editarFila(id){
    divEditar.classList.remove("ocultar");
    divEditar.classList.add("edit");
    let elId = id;
    let btnConfirmEdit = document.getElementById("btnConfirmEdit");
        btnConfirmEdit.addEventListener("click", function(){
            confirmarEditar(elId);
        });
    }

async function confirmarEditar(elId){
    let paisE = document.getElementById("paisInput").value;
    let ciudadE = document.getElementById("ciudadInput").value;
    let precioE = document.getElementById("precioInput").value;
    let tiempoE = document.getElementById("tiempoInput").value;
    let url = "https://web-unicen.herokuapp.com/api/groups/009RocioLionel/reparto";   
        let datos ={
            "thing":{
                "pais":paisE,
                "ciudad":ciudadE,
                "precio":precioE,
                "tiempo":tiempoE,
            }
        }
    let r = await fetch(url + "/" + elId,{
        "method":"PUT",
        "headers":{                    
            "Content-Type":"application/json"
        },
        "body":JSON.stringify(datos)

    });
    let json = await r.json(datos);
    console.log(json);

    let bodyTabla = document.getElementById("bodyTabla");
    bodyTabla.innerHTML = "";
    buscarJson(datos);
}

async function ingresar () {
    let url = "https://web-unicen.herokuapp.com/api/groups/009RocioLionel/reparto";
    let paisI = document.getElementById("paisI").value;
    let ciudadI = document.getElementById("ciudadI").value;
    let precioI = document.getElementById("precioI").value;
    let tiempoI = document.getElementById("tiempoI").value;
    let datos ={
        "thing":{
            "pais":paisI,
            "ciudad":ciudadI,
            "precio":precioI,
            "tiempo":tiempoI,
        }
    }

    let r = await fetch(url,{
        "method":'POST',
        "headers":{                    
            "Content-Type":"application/json"
        },
        "body":JSON.stringify(datos)
    })
    let json = await r.json();
    console.log(json);
    let structura = document.getElementById("bodyTabla");
    let tr = document.createElement("tr");
    let td1 = document.createElement("td");
    td1.classList.add("pais");
    let td2 = document.createElement("td");
    let td3 = document.createElement("td");
    let td4 = document.createElement("td");

    let btnEliminar = document.createElement("button");
    btnEliminar.innerHTML = "Borrar";
    btnEliminar.classList.add("btnTabla");
    btnEliminar.addEventListener("click", function(){
        this.parentElement.classList.add("ocultar");
        borrarFila(id);
    });
    let btnEditar = document.createElement("button");
    btnEditar.innerHTML = "Editar";
    btnEditar.classList.add("btnTabla");
    btnEditar.addEventListener("click", function(){
        editarFila(id);
    });
    td1.innerHTML = paisI;
    td2.innerHTML = ciudadI;
    td3.innerHTML = precioI;
    td4.innerHTML = tiempoI;
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(btnEliminar);
    tr.appendChild(btnEditar);
    structura.appendChild(tr);
}

async function crear (id){
    let url = "https://web-unicen.herokuapp.com/api/groups/009RocioLionel/reparto"
    for(let i =0; i<=tabla2.length;i++){
        let pais = tabla2[i].pais;
        let ciudad = tabla2[i].ciudad;
        let precio = tabla2[i].precio;
        let tiempo = tabla2[i].tiempo;
        let datos ={
            "thing":{
                "pais":pais,
                "ciudad":ciudad,
                "precio":precio,
                "tiempo":tiempo,
            }
        }
        
        let r = await fetch(url,{
            "method":'POST',
            "headers":{                    
                "Content-Type":"application/json"
            },
            "body":JSON.stringify(datos)
        })
        let json = await r.json();
        console.log(json);
        let structura = document.getElementById("bodyTabla");

    let tr = document.createElement("tr");
    let td1 = document.createElement("td");
    td1.classList.add("pais");
    let td2 = document.createElement("td");
    let td3 = document.createElement("td");
    let td4 = document.createElement("td");
    let btnEliminar = document.createElement("button");
    
    btnEliminar.innerHTML = "Borrar";
    btnEliminar.classList.add("btnTabla");
    btnEliminar.addEventListener("click", function(){
        this.parentElement.classList.add("ocultar");
        borrarFila(id);
    });
    let btnEditar = document.createElement("button");
    btnEditar.innerHTML = "Editar";
    btnEditar.classList.add("btnTabla");
    btnEditar.addEventListener("click", editarFila);

    td1.innerHTML = pais;
    td2.innerHTML = ciudad;
    td3.innerHTML = precio;
    td4.innerHTML = tiempo;
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(btnEliminar);
    tr.appendChild(btnEditar);
    structura.appendChild(tr);
    }
}

function filtrar(){
    let inputFiltrar = document.getElementById("inputFiltrar").value;
    let paisClass = document.querySelectorAll(".pais");
    for(let i =0; i < paisClass.length;i++){
        if(inputFiltrar != paisClass[i].innerHTML){
            paisClass[i].parentElement.classList.add("ocultar");
        } else if (inputFiltrar == paisClass[i].innerHTML){
            paisClass[i].parentElement.classList.remove("ocultar");
        }
    }
}         

function restablecer(){
    let paisClass = document.querySelectorAll(".pais");
    for(let i =0; i < paisClass.length;i++){
        paisClass[i].parentElement.classList.remove("ocultar");
    }
}

function borrarP (){
    let bodyTabla = document.getElementById("bodyTabla");
    bodyTabla.innerHTML = "";
    let arr = [].slice.call(bodyTabla);
    let itemTabla = arr;
    bodyTabla.removeChild(itemTabla);
}

let tabla2 = [
    {
        "pais":"Italia",
        "ciudad":"Roma",
        "precio":"2000",
        "tiempo":"9 dias"
    },
    {
        "pais":"Japon",
        "ciudad":"Tokyo",
        "precio":"3000",
        "tiempo":"10 dias"
    },
    {
        "pais":"Maruecco",
        "ciudad":"Tanger",
        "precio":"2500",
        "tiempo":"11 dias"
    }
];

