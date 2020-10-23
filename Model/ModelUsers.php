<?php
    class ModelUsers{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_flyshoes;charset=utf8', 'root', '');
        }

        function GetUser($user){
            $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
            $sentencia-> execute(array($user));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        function InsertUser($user, $hash){
            $sentencia = $this->db->prepare("INSERT INTO users (email, password ) VALUES (?,?)");
            $sentencia-> execute(array($user, $hash));
        }
    }
?>