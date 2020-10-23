<?php
    require_once './View/VistaMarca.php';
    require_once './Model/ModelMarca.php';
    require_once './Model/ModelItems.php';

     class ControllerMarca{
         private $vista;
         private $model;
         private $modelI;

        function __construct(){
            $this->vista = new VistaMarcas();
            $this->model = new ModelMarcas();
            $this->modelI = new ModelItems();
        }
        function ShowMarcas(){
            $marcas = $this->model->GetMarcas();
            session_start();
            if(!isset($_SESSION["email"])){
                $this->vista->renderMarcas($marcas);
            } else {
                $this->vista->renderMarcasLogged($marcas);
            }
        }
        function InsertMarca(){
            $this->model->InsertMarca($_POST['nombre_input'],$_POST['origen_input']);
            $marcas = $this->model->GetMarcas();
            $this->vista->renderMarcasLogged($marcas);
         }
        function BorrarMarcas($params = null){
            $id_marcas = $params[':ID'];
            $this->model->BorrarMarca($id_marcas);
            $marcas = $this->model->GetMarcas();
            $this->vista->renderMarcasLogged($marcas);
        }
        function ShowFormEditMarca($params = null){
            $id_marca = $params[":ID"];
            $marcas = $this->model->GetMarca($id_marca);
            $this->vista->ShowFormEditMarca( $marcas);
        }
        function ShowByMarcas($params = null){
            $id_marca = $params[':ID'];
            $item = $this->model->GetMarcaSelected($id_marca);
            $marcas = $this->model->GetMarca($id_marca);
            $this->vista->OrganizarXMarca($item, $marcas);
        }
        function editarMarca($params = null){
            $nombre = $_POST['nombre_input'];
            $origen = $_POST['origen_input'];
            $id_marca = $params[":ID"];
            $this->model->EditMarca($nombre, $origen, $id_marca);
            $marcas = $this->model->GetMarcas();
            $this->vista->renderMarcasLogged($marcas);
        }
    }
?>