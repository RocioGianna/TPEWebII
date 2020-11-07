<?php
require_once './View/VistaApi.php';

abstract class ApiController {
    protected $model;
    protected $view;
    private $data;
    
    public function __construct() {
        $this->view = new APIView();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data);
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

}


