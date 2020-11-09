<?php
require_once 'RouterClass.php';
require_once 'Controller/ControllerApi.php';

$r = new Router();

$r->addRoute("comentarios", "GET", "ControllerApi", "getComents");
$r->addRoute("comentario/:ID", "GET", "ControllerApi", "getComent");
$r->addRoute("deleteComentario/:ID", "DELETE", "ControllerApi", "deleteComent");
/*
$r->addRoute("comentar/:ID", "GET", "ControllerApi", "getFormComent");
$r->addRoute("notar/:ID", "GET", "ControllerApi", "getFormNote");*/

$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
