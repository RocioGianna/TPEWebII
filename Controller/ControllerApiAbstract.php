<?php
require_once './View/VistaApi.php';

abstract class ControllerApiAbstract {
    protected $model;
    protected $view;
    private $data;
    
    public function __construct() {
        $this->view = new VistaApi();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data);
    }
}


