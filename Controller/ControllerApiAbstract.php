<?php
require_once './View/VistaApi.php';

abstract class ControllerApiAbstract {
    protected $model;
    protected $vista;
    private $data;
    private $user;
    private $helper;
    
    public function __construct() {
        $this->vista = new VistaApi();
        $this->data = file_get_contents("php://input");
    }

    function getData(){
        return json_decode($this->data);
    }
}


