<?php
    require_once './View/VistaMarca.php';
    require_once './Model/ModelMarca.php';
    require_once './Model/ModelItems.php';
    require_once './Controller/Helper.php';
    require_once './Controller/ControllerUsers.php';

     class ControllerMarca{
         private $vista;
         private $model;
         private $modelI;
         private $helper;
         private $user;

        function __construct(){
            $this->vista = new VistaMarcas();
            $this->model = new ModelMarcas();
            $this->modelI = new ModelItems();
            $this->helper = new Helper();
            $this->user = new ControllerUsers();
        }

        function ShowMarcas(){
            $marcas = $this->model->GetMarcas();
            $usuarioLogueado = $this->helper->checkLoggedIn();
            $admin = $this->user->userTipe();
            if($usuarioLogueado){
                if($admin){
                    $this->vista->adminRenderMarcas($marcas);
                } else {
                    $this->vista->renderMarcasLogged($marcas);
                }
            } else {
                $this->vista->renderMarcas($marcas);
            }
        }
        function InsertMarca(){
            $nombre = $_POST['nombre_input'];
            $origen = $_POST['origen_input'];
            if(!empty($_POST['nombre_input']) && !empty($_POST['origen_input'])){
                $this->model->InsertMarca($_POST['nombre_input'],$_POST['origen_input']);
                $marcas = $this->model->GetMarcas();
                $this->vista->renderMarcasLogged($marcas);
            }else{
                $error = "No puede dejar espacios incompletos, vuelva a intentarlo";
                $this->vista->showError($error);
            }     
         }
        function BorrarMarcas($params = null){
            $id_marcas = $params[':ID'];
            $this->model->BorrarMarca($id_marcas);
            $this->ShowMarcas();
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
            if(!empty($_POST['nombre_input']) && !empty($_POST['origen_input'])){
                $this->model->EditMarca($nombre, $origen, $id_marca);
                $marcas = $this->model->GetMarcas();
                $this->vista->renderMarcasLogged($marcas);
            }else{
                $error = "No puede dejar espacios incompletos, vuelva a intentarlo";
                $this->vista->showError($error);
            }    
        }
     }
?>