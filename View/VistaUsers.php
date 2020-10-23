<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaUser{
        private $titulo;
        private $message;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        function Home(){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/main.tpl'); 
        }
        function HomeLogged(){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/loggedMain.tpl'); 
        }
        function ShowLogin($message = ""){
            $smarty = new Smarty();
            $smarty->assign('message', $message);
            $smarty->display('templates/formLogin.tpl'); 
        }
        function ShowFormNewUser($message = ""){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('message', $message);
            $smarty->display('templates/formNewUser.tpl'); 
        }
    }
?>