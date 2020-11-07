<?php
class Helper{

     public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            return false;
        }else{
            return true;
        }
    }
}