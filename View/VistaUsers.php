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
            $smarty->display('templates/userHome.tpl'); 
        }
        function HomeLogged(){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/loggedHome.tpl'); 
        }
        function AdminHome(){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/adminHome.tpl');
        }
        function showTable($users){
            $smarty = new Smarty();
            /*$smarty->assign(nombre de administrador)*/
            $smarty->assign('usuarios', $users);
            $smarty->display('templates/adminGestion.tpl');
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