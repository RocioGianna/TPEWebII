"use strict";

    function getComents(){
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => renderComs(comentarios))
        .catch(error => console.log(error));
    }
    function renderComs(comentarios){
        const listComents = document.querySelector("#listComents");
        for(let coment of comentarios){
            listComents.innerHTML += `<li class="list-group-item">${coment.comentario}</li>`;
        }
    }
    /*function getNotas(){
    fetch('api/comentarios')
        .then(response => response.json())
        .then(notas => renderNotas(notas))
        .catch(error => console.log(error));
    }
    function renderNotas(notas){
        const listNotas = document.querySelector("#listNotas");
        for(let nota of notas){
            listNotas.innerHTML += `<li class="list-group-item">${nota.nota}</li>`;
        }
    }
    getNotas();
    */
    getComents();

    
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

  async function getComent(){
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
