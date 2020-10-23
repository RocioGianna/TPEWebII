<?php
    require_once './View/VistaUsers.php';
    require_once './Model/ModelUsers.php';

    class ControllerUsers{
        private $vista;
        private $model;

        function __construct(){
            $this->vista = new VistaUser();
            $this->model = new ModelUsers();
        }
        function Home(){
            session_start();
            if(!isset($_SESSION["email"])){
                $this->vista->Home();
            } else {
                $this->vista->HomeLogged();
            }
        }
        function NewUser(){
            $this->vista->ShowFormNewUser();
        }
        function InsertNewUser(){
            $user = $_POST["user_input"];
            $password = $_POST["pass_input"];
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $this->model->InsertUser($user, $hash);
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
                        header("Location: ".BASE_URL."home");
                    }else{
                        $this->vista->ShowLogin("Contraseña incorrecta");
                    }
                }else{
                    $this->vista->ShowLogin("El usuario no existe");
                }
            }
        }
        /*
        private function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["email"])){
                header("Location: ".LOGIN);
            }
        }
        */
    }
?>