"use strict";

document.addEventListener("DOMContentLoaded", () => {
    alert("hola");
    getComent();
    document.querySelector("#listComent").addEventListener("submit",
    e => {
        e.preventDefault();
        addComent();
    });
});

function getComent(){
    fetch("api/comentar")
    .then(response => response.json())
    .then(coments => render(coments))
    .catch(error => console.log(error));
}

function render(coments){
    const container = document.querySelector("#listComents");
    for(let coment of coments){
        container.innerHTML += 
        '<li class="list-group-item">${coment.comentario}</li>';
    }
}

function addComent(){
    const item = {
        coment:"",
    }

    fetch("api/comentarios", {
        method: "post",
        headers: {"Content-type": "application/json"},
        body: JSON.stringify(item)
    })
    .then(response => response.json())
    .catch(error => console.log(error));
}

