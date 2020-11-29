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
        function InsertItemsWithImg($modelo, $talle, $precio, $stock, $marca, $imgSave){
            $sentencia = $this->db->prepare("INSERT INTO zapatillas ( modelo, talles, precio, stock, id_marca, imagen) VALUES (?,?,?,?,?,?)");
            $sentencia->execute(array($modelo, $talle, $precio, $stock, $marca, $imgSave));
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
        function GetInfo($id){
            $sentencia = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE id_zapatilla=?");
            $sentencia->execute(array($id));
            return $sentencia->fetchAll( PDO::FETCH_OBJ );
        }
        //model para comentarios
        function getComentarioProducto($id){
            $sentencia = $this->db->prepare("SELECT comentario, nota, id_comentario FROM opiniones JOIN zapatillas ON opiniones.id_producto = zapatillas.id_zapatilla WHERE zapatillas.id_zapatilla = ?");
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
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        function getComentario($id){
            $sentencia = $this->db->prepare("SELECT * FROM opiniones WHERE id_comentario=?");
            $sentencia->execute(array($id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //Paginacion
       /* function contadorProductos(){
            $sentencia = $this->db->prepare("SELECT COUNT(*) as contador FROM zapatillas");
            $sentencia->execute();
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }*/
        function itemsPagina($offset, $nroItems){
            $sentencia = $this->db->prepare("SELECT * FROM zapatillas LIMIT $offset, $nroItems");
            $sentencia->execute(array($offset, $nroItems));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //Busqueda avanzada 
        function getTalles(){ // trae los talles
            $sentence = $this->db->prepare("SELECT DISTINCT talles FROM zapatillas ORDER BY talles ASC");
            $sentence->execute();
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }
        function promedioPrecio(){ //promedio de la columna precios
            $sentence = $this->db->prepare("SELECT AVG (precio) AS promedio FROM zapatillas");
            $sentence->execute();
            return $sentence->fetch(PDO::FETCH_OBJ);
        }
        function searchMax(){ // trae el precio maximo
            $sentence = $this->db->prepare("SELECT MAX(precio) AS maximo FROM zapatillas");
            $sentence->execute();
            return $sentence->fetch(PDO::FETCH_OBJ);
        }
        function getProducto($talle, $precio, $nombre){ //filtro con los tres atributos
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE (talles = ? AND precio <= ?) AND stock > 0 AND marcas.id_marca=? ORDER BY precio ASC");
            $sentence->execute(array( $talle, $precio, $nombre));
            return $sentence->fetchAll(PDO::FETCH_OBJ );
        }
        function getProductoSinMarcas($talle, $precio){// filtro sin marca
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE (talles = ? AND precio <= ?) AND stock > 0 ORDER BY precio ASC");
            $sentence->execute(array( $talle, $precio));
            return $sentence->fetchAll( PDO::FETCH_OBJ );
        }
        function getProductoSoloPrecio( $precio){ //filtro solo de precio
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE  precio <= ? AND stock > 0 ORDER BY marcas.nombre ASC");
            $sentence->execute(array($precio));
            return $sentence->fetchAll( PDO::FETCH_OBJ );
        }
        function getProductoSinTalle( $precio, $nombre){ //filtro precio y marca
            $sentence = $this->db->prepare("SELECT zapatillas.*, marcas.nombre as nombre FROM zapatillas JOIN marcas ON zapatillas.id_marca = marcas.id_marca WHERE precio <= ? AND stock > 0 AND marcas.id_marca=? ORDER BY precio ASC");
            $sentence->execute(array( $precio, $nombre));
            return $sentence->fetchAll(PDO::FETCH_OBJ );
        }
    }
?>