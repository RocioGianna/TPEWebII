<?php
class Helper{

     public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            return 0;
        }else{
            return 1;
        }
    }
}