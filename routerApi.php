<?php
require_once 'RouterClass.php';
require_once 'Controller/ControllerApi.php';
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
$r = new Router();

$r->addRoute("opinion/:ID", "GET", "ControllerApi", "getFormOpinion"); //trae el formulario con el producto

$r->addRoute("comentario/:ID", "GET", "ControllerApi", "getComentProducto");//trae los comentarios de un producto
$r->addRoute("comentar/:ID", "POST", "ControllerApi", "addComent"); 
$r->addRoute("deleteCom/:ID", "DELETE", "ControllerApi", "deleteComent"); 
$r->addRoute("coment/:ID", "GET", "ControllerApi", "getComent"); //trae un comentario especifico


$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 

