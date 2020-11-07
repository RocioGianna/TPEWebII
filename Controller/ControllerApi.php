<?php
    require_once './View/VistaApi.php';
    require_once './Model/ModelItems.php';

    class ControllerApi extends APIController{
        
        function __construct(){
            parent::__construct();
             $this->vista = new VistaApi();
             $this->model = new ModelItems();
        }
        public function getFormComent($params = null){
            $id_zapatilla = $params[':ID'];
            $item = $this->model->GetInfo($id_zapatilla);
            $this->vista->ShowFormComent($item); //esto va con un response
        }
        public function deleteComent($params = null){
            $id_zapatilla = $params[':ID'];
            $item = $this->model->deleteComent($id_zapatilla);
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

        function getComents($params = null){
            $id_item = $params[":ID"];
            $coments = $this->model->getComents($id_item);
            if(!empty($coments)){
                $this->vista->response($coments, 200);
            }else {
                $this->vista->response("el producto con el id=$id no tien comentario", 404);
            }
        }

        public function deleteTask($params = []) {
            $task_id = $params[':ID'];
            $task = $this->model->getTask($task_id);
            if ($task) {
                $this->model->deleteTask($task_id);
                $this->view->response("Tarea id=$task_id eliminada con éxito", 200);        
            }else {
                $this->view->response("Task id=$task_id not found", 404);
            }
    }

