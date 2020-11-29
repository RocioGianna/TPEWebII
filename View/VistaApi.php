<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaApi{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }
        public function response($data, $status) {
            header("Content-Type: application/json");
            header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
            echo json_encode($data);
        }
        private function _requestStatus($code){ 
            $status = array(
                200 => "OK",
                404 => "Not found",
                500 => "Internal Server Error"     
            );      
            return (isset($status[$code]))? $status[$code] : $status[500];    
        }
        function ShowFormComent($item, $admin, $usuario){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->assign('item', $item);
            $smarty->assign('admin', $admin);
            $smarty->assign('usuario', $usuario);
            $smarty->display('templates/formOpinion.tpl'); 
        }
    }
