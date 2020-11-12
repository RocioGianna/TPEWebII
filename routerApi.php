<?php
require_once 'RouterClass.php';
require_once 'Controller/ControllerApi.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();

/*$r->addRoute("comentarios", "GET", "ControllerApi", "getComents"); //trae todos los comentarios*/
$r->addRoute("coment/:ID", "GET", "ControllerApi", "getComent"); //trae un comentario especifico
$r->addRoute("opinion/:ID", "GET", "ControllerApi", "getFormOpinion"); 
$r->addRoute("comentario/:ID", "GET", "ControllerApi", "getComentProducto");//trae los comentarios de un producto
$r->addRoute("deleteComentario/:ID", "GET", "ControllerApi", "deleteComent"); //borra un comentario
$r->addRoute("comentar", "POST", "ControllerApi", "addComent"); //se puede comentar

/*$r->addRoute("comentar/:ID", "GET", "ControllerApi", "getFormComent");
$r->addRoute("notar/:ID", "GET", "ControllerApi", "getFormNote");*/



$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 


