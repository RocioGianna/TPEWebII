<?php
    require_once './View/VistaApi.php';
    require_once './Model/ModelItems.php';

    class ControllerApi{
        private $vista;
        private $model;

        function __construct(){
             $this->vista = new VistaApi();
             $this->model = new ModelItems();
        }

        function getFormComent($params = null){
            $id_item = $params[":ID"];
            $item = $this->model->GetItem($id_item);
            $this->vista->ShowFormComent($item);
        }
        function getFormNote($params = null){
            $id_item = $params[":ID"];
            $item = $this->model->GetItem($id_item);
            $this->vista->ShowFormNote($item);
        }
    }

