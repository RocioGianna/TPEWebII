<?php
    require_once './View/VistaUsers.php';
    require_once './Model/ModelUsers.php';
    require_once './View/VistaItems.php';
    require_once './Controller/Helper.php';

    class ControllerUsers{
        private $vista;
        private $model;
        private $helper;
        private $view;

        function __construct(){
            $this->vista = new VistaUser();
            $this->model = new ModelUsers();
            $this->view = new VistaItems(); 
            $this->helper = new Helper();
        }
        function Home(){
            $usuario = $this->helper->checkLoggedIn();
            $admin = $this->helper->userTipe();
            $this->vista->home($admin, $usuario);
        }
        function usersTable(){
            $users = $this->model->GetUsers();
            $this->vista->showTable($users);
        }
        //borrar usuarios y editar permisos
        function deleteUser($params = null){
            $id = $params[':ID'];
            $this->model->deleteUser($id);
            $this->usersTable();
        }
        function quitarPermisos($params = null){
            $id = $params[':ID'];
            $rol = 0;
            $this->model->editPermiso($rol, $id);
            $this->usersTable();
        }
        function darPermisos($params = null){
            $id = $params[':ID'];
            $rol = 1;
            $this->model->editPermiso($rol, $id);
            $this->usersTable();
        }
        //nuevo usuario
        function NewUser(){
            $this->vista->ShowFormNewUser();
        }
        //Form para logearse 
        function Login($params = null){
            $this->vista->ShowLogin();
        }
        //inserta y loguea nuevo usuario
        function InsertNewUser(){
            $user = $_POST["user_input"];
            $password = $_POST["pass_input"];
            $tipo = 0;
            if(!empty($_POST['user_input']) && !empty($_POST['pass_input'])){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $this->model->InsertUser($user, $hash, $tipo);
                //logueo al usuario que recien creo su cuenta
                $_SESSION["email"] = $user;
                $_SESSION["pass"] = $hash;
                $_SESSION["rol"] = $tipo;
                $this->Home();
            }else{
                $error = "No puede dejar un campo incompleto, vuelva a intentarlo";
                $this->view->showError($error);
            }
        }
        //funcion para verificar usuario logeado
        function VerifyUser(){
            $user = $_POST["user_input"];
            $password = $_POST["pass_input"];
            $hash = password_hash($password, PASSWORD_DEFAULT);

            if(isset($user)){
                $userFromDb = $this->model->GetUser($user);
                if(isset($userFromDb) && $userFromDb){
                    if(password_verify($password, $userFromDb->password)){
                        session_start();
                        $_SESSION["email"] = $userFromDb->email;
                        $_SESSION["pass"] = $userFromDb->password;
                        $_SESSION["rol"] = $userFromDb->rol;
                        header("Location: ".BASE_URL."home");
                    }else{
                        $this->vista->ShowLogin("Contraseña incorrecta");
                    }
                }else{
                    $this->vista->ShowLogin("El usuario no existe");
                }
            }
        }
    }
?>