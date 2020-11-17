"use strict";

document.addEventListener("DOMContentLoaded", 
    function getComents(){
    const id = document.getElementById("id_producto").textContent;
    fetch('api/comentario/' + id)
        .then(response => response.json())
        .then((comentarios) => renderComs(comentarios))
        .catch(error => console.log(error));
    });
    function renderComs(comentarios){
        const listComents = document.querySelector("#listComents");
        const listNotas = document.querySelector("#listNotas");
        for(let coment of comentarios){
            listComents.innerHTML += `<li class="list-group-item">${coment.comentario}
            <button type="submit" class="deleteCom">Borrar</button></li>`;
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
    let btnAddCom = document.querySelector("#btnAddCom");
    btnAddCom.addEventListener("click", 
    function addComent(){
        const id = document.getElementById("id_producto").textContent;
        let comentario = document.querySelector("#comentario").value;
        let nota = document.querySelector("#notaItem").value;
        let opinion = {
            "comentario":comentario,
            "nota": nota
        };
        fetch("api/comentar/" + id, {
            method: "post",
            headers: {"Content-type": "application/json"},
            body: JSON.stringify(opinion)
        })
        .then(response => response.json())
        .catch(error => console.log(error));
    });

