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
        function InsertItems($modelo, $talle, $precio, $stock, $marca){
            $sentencia = $this->db->prepare("INSERT INTO zapatillas ( modelo, talles, precio, stock, id_marca) VALUES (?,?,?,?,?)");
            $sentencia->execute(array($modelo, $talle, $precio, $stock, $marca));
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
        //model para comentarios
        function getComentarioProducto($id){
            $sentencia = $this->db->prepare("SELECT comentario, nota FROM opiniones JOIN zapatillas ON opiniones.id_producto = zapatillas.id_zapatilla WHERE zapatillas.id_zapatilla = ?");
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function addComentario($id,$comentario, $nota){
            $sentencia = $this->db->prepare("INSERT INTO opiniones(id_producto, comentario, nota) VALUES(?,?,?)");
            $sentencia->execute(array($id,$comentario, $nota));
            return $this->db->lastInsertId();
        }
        function deleteComentario($id){ 
            $sentencia = $this->db->prepare("DELETE FROM opiniones WHERE id_comentario=?");
            $sentencia->execute(array($id));
        }
        function getComentario($id){
            $sentencia = $this->db->prepare("SELECT * FROM opiniones WHERE id_comentario=?");
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function getComentarios(){
            $sentencia = $this->db->prepare("SELECT * FROM opiniones");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        //Busqueda avanzada 
        function getProducto($talle, $precio, $nombre){
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE (talles = ? OR precio <= ?) AND stock > 0 AND marcas.id_marca=? ORDER BY precio ASC");
            $sentence->execute(array( $talle, $precio, $nombre));
            return $sentence->fetchAll( PDO::FETCH_OBJ );
        }
    }
?>