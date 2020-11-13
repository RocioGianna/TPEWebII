<?php
require_once 'RouterClass.php';
require_once 'Controller/ControllerApi.php';
<<<<<<< HEAD
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
=======

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

>>>>>>> 52a1839e691cfca4e6c163752cebbbc2c050ad7f
$r = new Router();

$r->addRoute("comentarios", "GET", "ControllerApi", "getComents"); //trae todos los comentarios
$r->addRoute("coment/:ID", "GET", "ControllerApi", "getComent"); //trae un comentario especifico
$r->addRoute("comentario/:ID", "GET", "ControllerApi", "getComentProducto");//trae los comentarios de un producto
$r->addRoute("opinion/:ID", "GET", "ControllerApi", "getFormOpinion"); 
$r->addRoute("deleteComentario/:ID", "GET", "ControllerApi", "deleteComent"); //borra un comentario
<<<<<<< HEAD
$r->addRoute("comentar", "POST", "ControllerApi", "addComent"); //se puede comentar

/*$r->addRoute("comentar/:ID", "GET", "ControllerApi", "getFormComent");
$r->addRoute("notar/:ID", "GET", "ControllerApi", "getFormNote");*/
=======
$r->addRoute("comentar/:ID", "POST", "ControllerApi", "addComent"); //se puede comentar
>>>>>>> 52a1839e691cfca4e6c163752cebbbc2c050ad7f

$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 


