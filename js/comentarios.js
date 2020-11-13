"use strict";

<<<<<<< HEAD:js/opinion.js
function getComent(){
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentarios => renderCom(comentarios))
        .then(notas => renderNota(notas))
        .catch(error => console.log(error));
    }

    function renderCom(comentarios){
        const listComents = document.querySelector("#listComents");
        for(let coment of comentarios){
            listComents.innerHTML += `<li class="list-group-item">${coment.comentario}</li>`;
        }
    }
    function renderNota(notas){
        const listNotas = document.querySelector("#listNotas");
        for(let nota of notas){
            listNotas.innerHTML += `<li class="list-group-item">${nota.nota}</li>`;
        }
    }
    getComent();

    
=======
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
>>>>>>> 52a1839e691cfca4e6c163752cebbbc2c050ad7f:js/comentarios.js
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
<<<<<<< HEAD:js/opinion.js

  async function getComent(){
=======
/*  async function getComent(){
>>>>>>> 52a1839e691cfca4e6c163752cebbbc2c050ad7f:js/comentarios.js
    const listComents = document.querySelector("#listComents");
    let url = "http://localhost/web2/flyshoes.com/TPEWebII/api/opinion";
    let r = await fetch (url);
    let $comentarios = await r.json();
        for(let comentario of comentarios){
            listComents.innerHTML += 
            '<li class="list-group-item">' + comentarios.comentario + '</li>';
        }
    }
<<<<<<< HEAD:js/opinion.js
    */
=======
*/

>>>>>>> 52a1839e691cfca4e6c163752cebbbc2c050ad7f:js/comentarios.js
