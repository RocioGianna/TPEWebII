<?php
 require_once './Model/ModelUsers.php';

 class Helper{
     private $model;

     public function __construct(){
         $this->model = new ModelUsers();
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