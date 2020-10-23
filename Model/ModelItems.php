<?php
    class ModelItems{
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_flyshoes;charset=utf8', 'root', '');
        }
        // ABM Productos 
        function GetItems(){
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca");
            $sentence->execute();
            return $sentence->fetchAll( PDO::FETCH_OBJ );
        }
        function InsertItems($modelo_input, $talle_input, $precio_input, $stock_input, $marca_input){
            $sentencia = $this->db->prepare("INSERT INTO zapatillas ( modelo, talles, precio, stock, id_marca) VALUES (?,?,?,?,?)");
            $sentencia->execute(array($modelo_input, $talle_input, $precio_input, $stock_input, $marca_input));
        }
        function BorrarItem($id_zapatilla){
            $sentencia = $this->db->prepare("DELETE FROM zapatillas WHERE id_zapatilla=?");
            $sentencia->execute(array($id_zapatilla));
        }
        function EditItem($modelo, $talle, $precio, $stock, $marca, $id_item){
            $sentencia = $this->db->prepare("UPDATE zapatillas SET modelo=?, talles=?, precio =?, stock=?, id_marca=? WHERE id_zapatilla=?");
            $sentencia->execute(array($modelo, $talle, $precio, $stock, $marca, $id_item));
        }
        function GetItem($id_item){
            $sentencia = $this->db->prepare("SELECT * FROM zapatillas WHERE id_zapatilla=?");
            $sentencia-> execute(array($id_item));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        function GetInfo($id_zapatilla){
            $sentencia = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE id_zapatilla=?");
            $sentencia->execute(array($id_zapatilla));
            return $sentencia->fetchAll( PDO::FETCH_OBJ );
        }
    }
?>