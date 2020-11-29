<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaItems{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        function DetalleProduct($item, $admin, $usuario){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('item', $item);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/detallesProduct.tpl'); 
        }
        function ShowProducts($items, $marcas, $admin, $usuario){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('items', $items);
            $smarty->assign('marcas', $marcas);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/productos.tpl'); 
        }
        function ShowFormEdit($item, $marcas, $usuario, $admin){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('item', $item);
            $smarty->assign('marcas', $marcas);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/formEditProduct.tpl'); 
        }
        function showError($error){
            $smarty = new Smarty;
            $smarty->assign('error', $error);
            $smarty->display('templates/error.tpl');
        }
        //busqueda
        function showFormBusqueda($productos, $totalTalles, $promedio, $min, $medio, $maximo, $admin, $usuario){
            $smarty = new Smarty;
            $smarty->assign('marcas', $productos);
            $smarty->assign('talles', $totalTalles);
            $smarty->assign('prom', $promedio);
            $smarty->assign('min', $min);
            $smarty->assign('medio', $medio);
            $smarty->assign('max', $maximo);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/formBusqueda.tpl');
        }
        function showCoincidencias($productos, $admin, $usuario){
            $smarty = new Smarty;
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->assign('items', $productos);
            $smarty->display('templates/productosBusqueda.tpl');
        }
        function ShowHomeLocation(){
            header("Location: ".BASE_URL."home");
        }
        function renderError() {
            echo "<h2>Error! Género no especificado.</h2>";
        }
    }
?>