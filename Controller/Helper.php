<?php
class Helper{
    function __construct(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }
    public function checkLoggedIn(){
        if(!isset($_SESSION["email"])){
            return false;
        }else{
            return true;
        }
    }
    //Tipo de usuario logeado
    function userTipe(){
        if(isset($_SESSION["rol"]) && $_SESSION["rol"] == 1){
            return 1;
        }else{
            return 0;
        }
    }
}