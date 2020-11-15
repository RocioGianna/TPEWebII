<?php
    require_once './View/VistaItems.php';
    require_once './Model/ModelItems.php';
    require_once './Model/ModelMarca.php';
    require_once './Controller/Helper.php';
    require_once './Controller/ControllerUsers.php';

    class ControllerItems{
        private $vista;
        private $model;
        private $modelM;
        private $helper;
        private $user;

        function __construct(){
             $this->vista = new VistaItems();
             $this->model = new ModelItems();
             $this->modelM = new ModelMarcas();
             $this->helper = new Helper();
             $this->user = new ControllerUsers();
        }

        function ShowItems(){
            $items = $this->model->GetItems();
            $marcas = $this->modelM->GetMarcas();
            $usuarioLogueado = $this->helper->checkLoggedIn();
            $Admin = $this->user->userTipe();
            if($usuarioLogueado){
                if($Admin){
                    $this->vista->ShowItemsAdmin($items, $marcas);
                }else{
                    $this->vista->ShowItemsLogged($items, $marcas);
                }
            }else{
                $this->vista->ShowItems($items);
            }
        }
        function Insert(){
            $modelo = $_POST['modelo_input'];
            $talle = $_POST['talle_input'] ;
            $precio = $_POST['precio_input'];
            $stock = $_POST['stock_input'];
            $marca = $_POST['marca_input'];
            if(!empty($_POST['modelo_input']) && !empty($_POST['talle_input']) && !empty($_POST['precio_input']) && !empty($_POST['stock_input']) && !empty($_POST['marca_input'])){
                $this->model->InsertItems($modelo, $talle, $precio, $stock, $marca);
                $items = $this->model->GetItems();
                $marcas = $this->modelM->GetMarcas();
                $this->vista->ShowItemsLogged($items, $marcas);
            }else{
                $error = "No puede dejar espacios incompletos, vuelva a intentarlo";
                $this->vista->showError($error);
            }
        }
        function Borrar($params = null){
            $id_zapatilla = $params[':ID'];
            if(isset($id_zapatilla)){
                $this->model->BorrarItem($id_zapatilla);
                $this->ShowItems();
            }else{
                $error = "El Id no existe";
                $this->vista->showError($error);
            }
        }
        function DetalleProducto($params = null){
            $id_zapatilla = $params[':ID'];
            if(isset($id_zapatilla)){
                $item = $this->model->GetInfo($id_zapatilla);
                $this->vista->DetalleProduct($item);
            }else{
                $error = "El Id no existe";
                $this->vista->showError($error);
            }
        }
        function ShowEditForm($params = null){
            $id_item = $params[":ID"];
            $item = $this->model->GetItem($id_item);
            $marcas = $this->modelM->GetMarcas();
            $this->vista->ShowFormEdit($item, $marcas);
        }
        function Edit($params = null){
            $modelo = $_POST["modelo_input"];
            $talle = $_POST["talle_input"];
            $precio = $_POST["precio_input"];
            $stock = $_POST["stock_input"];
            $marca = $_POST["marca_input"];
            $id_item = $params[":ID"];
            if(!empty($_POST['modelo_input']) && !empty($_POST['talle_input']) && !empty($_POST['precio_input']) && !empty($_POST['stock_input']) && !empty($_POST['marca_input'])){
                $this->model->EditItem($modelo, $talle, $precio, $stock, $marca, $id_item);
                $this->ShowItems();
            }else{
                $error = "No puede dejar espacios incompletos, vuelva a intentarlo";
                $this->vista->showError($error);
            }
        }
        //Busqueda avanzada
        function formBusqueda(){
            $productos = $this->modelM->GetMarcas(); //marcas
            $talles = $this->model->getTalles();//talles
            $prom = $this->model->promedioPrecio();//promedio
            $promedio = $prom->promedio/100;
            $promedio = (int)$promedio;//promedio entero
            $promedio = $promedio * 100;
            $max = $this->model->searchMax();//maximo
            $maximo = (int)$max->maximo;//maximo entero
            $min = (int)($promedio * 0.50); //minimo entero
            $medio = (int)($promedio * 1.25); //medio entero
            for( $i =0; $i < count( $talles); $i++ ){
                $talle = (array)$talles[$i];//pase los objetos a arreglos para luego pasarlos a enteros porque me salia un error
                $talle = (int)$talle['talles'];
                $totalTalles[$i] = $talle;
            }
            $this->vista->showFormBusqueda($productos, $totalTalles,$promedio, $min, $medio, $maximo);
        }
        function busqueda(){
            $talle = $_POST["talle_input"];
            $precio = $_POST["precio_input"];
            $nombre = $_POST["marca_input"];
            if($precio == ""){
                $max = $this->model->searchMax(); 
                $precio = (int)$max->maximo;
            }
            if($talle == ""){
                if ($nombre == ""){
                    $productos = $this->model->getProductoSoloPrecio($precio);
                }else{
                    $productos = $this->model->getProductoSinTalle($precio, $nombre);
                }
            }else if ($nombre == ""){
                    $productos = $this->model->getProductoSinMarcas($talle, $precio);
                }else{
                    $productos = $this->model->getProducto( $talle,$precio, $nombre);
                }
                if($productos){
                    $this->vista->showCoincidencias($productos);
                }else{
                    $error = "No se encontraron zapatillas con esas condiciones";
                    $this->vista->showError($error);
                }
        }
    }
?>