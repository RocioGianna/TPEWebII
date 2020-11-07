<?php
require_once 'Controller/ControllerApi.php';
require_once 'RouterClass.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

$r = new Router();

$r->addRoute("comentar/:ID", "GET", "ControllerApi", "getFormComent");
$r->addRoute("notar/:ID", "GET", "ControllerApi", "getFormNote");

$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 

?>