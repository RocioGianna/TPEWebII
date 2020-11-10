<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaItems{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        function DetalleProduct($item){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('item', $item);
            $smarty->display('templates/detallesProduct.tpl'); 
        }
        function ShowItems($items){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('items', $items);
            $smarty->display('templates/userProducts.tpl'); 
        }
        function ShowItemsLogged($items, $marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('items', $items);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/loggedProducts.tpl'); 
        }
        function ShowFormEdit($item, $marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('item', $item);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/formEditProduct.tpl'); 
        }
        function showError($error){
            $smarty = new Smarty;
            $smarty->assign('error', $error);
            $smarty->display('templates/error.tpl');
        }
        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }
        function renderError() {
            echo "<h2>Error! Género no especificado.</h2>";
        }
    }
?>