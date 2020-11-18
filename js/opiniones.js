"use strict";

document.addEventListener("DOMContentLoaded", ()=>{
    getComents();
    document.querySelector("#formComent").addEventListener('submit', e =>{
        e.preventDefault();
        addComent();
    })
});

    function getComents(){
    const id = document.getElementById("id_producto").textContent;
    fetch('api/comentario/' + id)
        .then(response => response.json())
        .then((comentarios) => renderComs(comentarios))
        .catch(error => console.log(error));
    }
    function renderComs(comentarios){
        const listComents = document.querySelector("#listComents");
        listComents.innerHTML = "";
        const listNotas = document.querySelector("#listNotas");
        listNotas.innerHTML = "";
       /* const tipoUsuario = document.getElementById("tipo_usuario").textContent;
        console.log(tipoUsuario);*/
        for(let coment of comentarios){
           // if(!tipoUsuario){
                listComents.innerHTML += `<li class="list-group-item">${coment.comentario} <button type="submit" id="deleteCom" class="btn btn-secondary"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></button></li>`;
          /*  }else{
                listComents.innerHTML += `<li class="list-group-item">${coment.comentario}</li>`;
            }*/
            listNotas.innerHTML += `<li class="list-group-item">${coment.nota}</li>`;
            let btnDelete = document.getElementById("deleteCom");
            for(let i = 0; i < btnDelete.length;i++){
                btnDelete[i].addEventListener("click", 
                function deleteComent(){
                    const id = document.getElementById("id_producto").textContent;
                    fetch('api/deleteComentario/' + id, {
                    "method": "DELETE",
                    })
                    
                });
            }
        }
    }
    function addComent(){
        const id = document.getElementById("id_producto").textContent;
        let opinion = {
            "id_producto": id,
            "comentario":document.querySelector("#comentario").value,
            "nota": document.querySelector("#notaItem").value
        }

        fetch("api/comentar/" + id, {
            method: "post",
            headers: {"Content-type": "application/json"},
            body: JSON.stringify(opinion)
        })
        .then(response => response.json())
        .then(comentarios => getComents())
        .catch(error => console.log(error));
    }

