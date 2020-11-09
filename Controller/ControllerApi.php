<?php
require_once './Model/ModelItems.php';
require_once 'ControllerApiAbstract.php';

    class ControllerApi extends ControllerApiAbstract{

        function __construct(){
             parent::__construct();
             $this->vista = new VistaApi();
             $this->model = new ModelItems();
        }
        function getComents(){
            $comentarios = $this->model->getComentarios();
            $this->vista->response($comentarios, 200);
        }
        function getComentProducto($params = null){
            $id = $params[':ID'];
            $comentario = $this->model->getComentarioProducto($id);
            if($comentario){
                $this->vista->response($comentario, 200);
            }else{
                $this->vista->response("El comentario con el id=$id no existe", 404);
            }
        }
        function getComent($params = null){
            $id = $params[':ID'];
            $comentario = $this->model->getComentario($id);
            $this->vista->response($comentario, 200);
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
            if (!empty($comentario)) {
                $this->model->deleteComentario($id);
                $this->view->response("Comentario id=$id eliminado con éxito", 200);
            }else {
                $this->view->response("Comentario id=$id not found", 404);
            }
        }
/*
        public function getFormNote($params = null){ 
            $id_zapatilla = $params[':ID'];
            $item = $this->model->GetInfo($id_zapatilla);
            $this->vista->ShowFormComent($item); //esto va con un response
        }
*/
    }

