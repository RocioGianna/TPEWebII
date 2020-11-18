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
        const tipoUsuario = document.querySelector("#tipo_usuario");
        for(let coment of comentarios){
            if(tipoUsuario == true){
                listComents.innerHTML += `<li class="list-group-item">${coment.comentario}</li> <button type="submit" class="deleteCom">Borrar</button> `;
            }else{
                listComents.innerHTML += `<li class="list-group-item">${coment.comentario}</li>`;
            }
            listNotas.innerHTML += `<li class="list-group-item">${coment.nota}</li>`;
            let btnDelete = document.getElementsByClassName("deleteCom");
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

