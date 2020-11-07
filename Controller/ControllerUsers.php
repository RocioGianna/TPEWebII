<?php
    require_once './View/VistaUsers.php';
    require_once './Model/ModelUsers.php';
    require_once './Controller/Helper.php';

    class ControllerUsers{
        private $vista;
        private $model;
        private $helper;

        function __construct(){
            $this->vista = new VistaUser();
            $this->model = new ModelUsers();
            $this->helper = new Helper();
            
        }
        function Home(){
            $usuarioLogueado = $this->helper->checkLoggedIn();
            if($usuarioLogueado && $_SESSION["rol"] == 0){
                $this->vista->HomeLogged();
            } else if($usuarioLogueado && $_SESSION["rol"] == 1){
                $this->vista->AdminHome();
            } else{
                $this->vista->Home();
            }
        }
        function usersTable(){
            $users = $this->model->GetUsers();
            $this->vista->showTable($users);
        }
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
        function NewUser(){
            $this->vista->ShowFormNewUser();
        }
        function InsertNewUser(){
            $user = $_POST["user_input"];
            $password = $_POST["pass_input"];
            $tipo = 0;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->InsertUser($user, $hash, $tipo);
            session_start();
            $_SESSION["email"] = $user;
            $_SESSION["pass"] = $hash;
            $_SESSION["rol"] = $tipo;
            $this->vista->Home();
        }
        function Login($params = null){
            $this->vista->ShowLogin();
        }
        function LogOut(){
            session_start();
            session_destroy();
            header("Location: ".LOGIN);
        }
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