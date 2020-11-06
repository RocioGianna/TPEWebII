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
        function GetUsers(){
            $sentencia = $this->db->prepare("SELECT * FROM usuarios");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function getRol(){
            $sentencia = $this->db->prepare("SELECT rol FROM usuarios");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function deleteUser($id){
            $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id= ?");
            $sentencia->execute(array($id));
        }
        function InsertUser($user, $hash, $tipo){
            $sentencia = $this->db->prepare("INSERT INTO usuarios (email, password, rol ) VALUES (?,?,?)");
            $sentencia-> execute(array($user, $hash, $tipo));
        }
        function editPermiso($rol, $id){
            $sentencia = $this->db->prepare("UPDATE usuarios SET(rol = ?) WHERE id= ?");
            $sentencia->execute(array($rol, $id));
        }
    }
?>