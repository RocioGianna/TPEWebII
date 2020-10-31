<?php
 require_once './Model/ModelUsers.php';

 class Helper{
     private $model;

     public function __construct(){
         $this->model = new ModelUsers();
     }
     public function logedUser(){
        if(isset($_SESSION['email'])){
            $nombre = $_SESSION['email'];
            $UserConectado = $this->model->getUser($nombre);
            return $UserConectado;
        }else{
            return null;
        }
     }
     public function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            return false;
        }else{
            return true;
        }
    }
 }