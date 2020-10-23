<?php
    class ModelMarcas{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_flyshoes;charset=utf8', 'root', '');
        }
        function GetMarcas(){
            $sentencia = $this->db->prepare("SELECT * FROM marcas");
            $sentencia-> execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function GetMarca($id_marca){
            $sentencia = $this->db->prepare("SELECT * FROM marcas WHERE id_marca=?");
            $sentencia-> execute(array($id_marca));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        function InsertMarca($nombre_input, $origen_input){
            $sentencia = $this->db->prepare("INSERT INTO marcas (nombre, origen ) VALUES (?,?)");
            $sentencia->execute(array($nombre_input, $origen_input));
        }
        function BorrarMarca($id_marcas){
            $sentencia = $this->db->prepare("DELETE FROM marcas WHERE id_marca=?");
            $sentencia->execute(array($id_marcas));
        }
        function EditMarca($nombre, $origen, $id_marca){
            $sentencia = $this->db->prepare("UPDATE marcas SET nombre=?, origen=? WHERE id_marca=?");
            $sentencia->execute(array($nombre, $origen, $id_marca));
        }
        function GetMarcaSelected($id_marca){
            $sentencia = $this->db->prepare("SELECT * FROM zapatillas WHERE id_marca=?");
            $sentencia-> execute(array($id_marca));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>