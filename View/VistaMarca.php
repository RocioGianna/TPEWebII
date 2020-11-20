<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaMarcas{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        function OrganizarXMarca($item, $marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->assign('items', $item);
            $smarty->display('templates/gruposMarcas.tpl'); 
        }
        function marcas($marcas, $admin, $usuario){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/marcas.tpl'); 
        }
        function ShowFormEditMarca($marcas){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('marcas', $marcas);
            $smarty->display('templates/formEditMarca.tpl'); 
        }
    }
?>