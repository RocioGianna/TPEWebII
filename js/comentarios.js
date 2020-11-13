"use strict";

    function getComent(){
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => render(comentarios))
        .catch(error => console.log(error));
    }


    function render(comentarios){
        const listComents = document.querySelector("#listComents");
        for(let coment of comentarios){
            listComents.innerHTML += `<li class="list-group-item">${coment.comentario} - Nota - ${coment.nota}</li>`;
        }
    }
    getComent();
/*
    function addComent(){
        const item = {
            coment:"",
        }

        fetch("api/opinion", {
            method: "post",
            headers: {"Content-type": "application/json"},
            body: JSON.stringify(item)
        })
        .then(response => response.json())
        .catch(error => console.log(error));
    }
/*  async function getComent(){
    const listComents = document.querySelector("#listComents");
    let url = "http://localhost/web2/flyshoes.com/TPEWebII/api/opinion";
    let r = await fetch (url);
    let $comentarios = await r.json();
        for(let comentario of comentarios){
            listComents.innerHTML += 
            '<li class="list-group-item">' + comentarios.comentario + '</li>';
        }
    }
*/

