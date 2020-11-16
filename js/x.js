"use strict";
document.addEventListener("DOMContentLoaded", ()=>{
    getComent();
    document.querySelector("#formComent").addEventListener('submit', e =>{
        e.preventDefault();
        addComent();
    })
});
    function getComent(){
        const id = document.getElementById("id_producto").textContent;
        fetch('api/comentario/' + id)
            .then(response => response.json())
            .then(comentarios => render(comentarios))
            .catch(error => console.log(error));
    }
    function render(comentarios){
        const listComents = document.querySelector("#listComents");
        listComents.innerHTML = "";
       /* const listNota = document.querySelector("#listPuntos");
        listNota.innerHTML = "";*/
        for(let coment of comentarios){
            listComents.innerHTML += `<li class="list-group-item">${coment.comentario} - Nota: ${coment.nota}  </li>`;
        }
    }
    function addComent(){
        const id = document.getElementById("id_producto").textContent;
        const comentario = {
                "id_producto": id,
                "comentario": document.getElementById("comentario").value,
                "nota": document.getElementById("puntaje").value
        }

        fetch('api/comentar/' + id ,{
            "method": "POST",
            "headers":{"Content-Type": "application/json"},
            "body": JSON.stringify(comentario)
        })
        .then(response => response.json())
        .then(comentarios => getComent())
        .catch(error => console.log(error));
    }
    document.getElementById("btn-delete").addEventListener('click', deleteComent);
    function deleteComent(){
        const id = document.getElementById("id_producto").textContent;
        fetch('api/deleteComentario/' + id, {
            "method": "DELETE",
        })
        .then(response =>response.json())
        .then(comentarios => getComent())
        .catch(error => console.log(error));
    }