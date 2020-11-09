<?php
    require_once './View/VistaApi.php';
    require_once './Model/ModelItems.php';

    class ControllerApi {
        
        function __construct(){
             $this->vista = new VistaApi();
             $this->model = new ModelItems();
        }
        function getComents(){
            $comentarios = $this->model->getComentarios();
            $this->vista->response($comentarios, 200);
        }
        function getComent($params = null){
            $id = $params[':ID'];
            $comentario = $this->model->getComentario($id);
            if($comentario){
                $this->vista->response($comentario, 200);
            }else{
                $this->vista->response("El comentario con el id=$id no existe", 404);
            }
        }
        function deleteComent($params = null){
            $id = $params[':ID'];
            $comentario = $this->model->deleteComent($id);
            if (!empty($comentario)) {
                $this->vista->response("El comentario se borro", 200);
            } else{
                $this->vista->response("El comentario no existe", 404);
            }
        }
    }
    
    /*
     public function getFormComent($params = null){
            $id_zapatilla = $params[':ID'];
            $item = $this->model->GetInfo($id_zapatilla);
            $this->vista->ShowFormComent($item); //esto va con un response
        }
        public function getFormNote($params = null){ 
            $id_zapatilla = $params[':ID'];
            $item = $this->model->GetInfo($id_zapatilla);
            $this->vista->ShowFormComent($item); //esto va con un response
        }
        public function addComent($params = null){
            $body = $this->getData();
            $titulo = $body->titulo;
            $descripcion = $body->descripcion;
            $tarea = $this->model->addComent($body->$titulo, $body->$descripcion);
        }
*/

