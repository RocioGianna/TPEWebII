"use strict";

document.addEventListener("DOMContentLoaded", () => {
    getComent();
    document.querySelector("#formComent").addEventListener("submit",
    e => {
        e.preventDefault();
        addComent();
    });
});

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

function getComent(){
    fetch("api/comentarios")
    .then(response => response.json())
    .then(coments => render(coments))
    .catch(error => console.log(error));
}

function render(coments){
    const container = document.querySelector("#comentarios");

    for(let coment of coments){
        container.innerHTML += "<li class='list-group-item'>${item.coment}</li>";
    }
}