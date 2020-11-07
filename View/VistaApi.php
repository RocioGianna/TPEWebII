<?php
require_once "./libs/smarty/Smarty.class.php";

    class VistaApi{
        private $titulo;

        function __construct(){
            $this->titulo = "FlyShoes";
        }        
        function ShowFormComent($item){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/coment.tpl'); 
        }
        function ShowFormNote($items){
            $smarty = new Smarty();
            $smarty->assign('titulo', $this->titulo);
            $smarty->display('templates/note.tpl'); 
        }
        public function response($data, $status) {
            header("Content-Type: application/json");
            header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
            echo json_encode($data);
        }
        
    }
