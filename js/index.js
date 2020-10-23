"use strict";

document.addEventListener("DOMContentLoaded", promocion);

function promocion(){
    setInterval(function(){
    let promo = document.getElementById("promocion");
    promo.classList.toggle("promo")
    }, 1000);
}