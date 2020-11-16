<?php
require_once './Model/ModelItems.php';
require_once 'ControllerApiAbstract.php';
require_once './Controller/Helper.php';

    class ControllerApi extends ControllerApiAbstract{

        function __construct(){
             parent::__construct();
             $this->vista = new VistaApi();
             $this->model = new ModelItems();
             $this->helper = new Helper();
        }
        public function getFormOpinion($params = null){ 
            $id_zapatilla = $params[':ID'];
            $item = $this->model->GetInfo($id_zapatilla);
            $usuarioLogueado = $this->helper->checkLoggedIn();
            if($usuarioLogueado && $_SESSION["rol"] == 0){
                $this->vista->ShowFormComent($item);
            } else {
                $this->vista->adminFormComent($item);
            }
        }
        public function getComentProducto($params = null){
            $id = $params[':ID'];
            $comentarios = $this->model->getComentarioProducto($id);
            return $this->vista->response($comentarios, 200);
        }
        function addComent($params = null){
            $id = $params[':ID'];
            $body = $this->getData();
            $comentario = $body->comentario;
            $nota = $body->nota;
            $comentario = $this->model->addComentario($id,$comentario, $nota);
            if($comentario){
                $this->vista->response($this->model->getComentario($id), 200);
            }else{
                $this->vista->response("El comentario no se pudo insertar", 404);
            }
        }
        function deleteComent($params = null){ 
            $id = $params[':ID'];
            $comentario = $this->model->getComentario($id);
            if($comentario){
                $this->model->deleteComentario($id);
                return $this->vista->response($comentarios, 200);
            }else{
                $this->vista->response("El comentario no existe", 404);
            }
        }
        function getComents(){
            $comentarios = $this->model->getComentarios();
            $this->vista->response($comentarios, 200);
        }
        function getComent($params = null){
            $id = $params[':ID'];
            $comentarios = $this->model->getComentario($id);
            $this->vista->response($comentarios, 200);
        }
        
        
        
    }

