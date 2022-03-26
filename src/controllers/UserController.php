<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../dal/UserDao.php";
    require_once __DIR__ . "/../models/User.php";

    class UserController{
        private $dao;        
        
        function __construct(){
            $this->dao = new UserDao();            
        }

        function registerUser(){
            $user = new User($_POST["name"], $_POST["username"], $_POST["password"], $_POST["type"]);            
            $this->dao->insertUser($user);
        }

        function login(){                        
            $result = $this->dao->checkIfMatchPassword($_POST["username"], $_POST["password"]);

            if(sizeof($result) == 0){
                header("Location:../views/login.php");          
            } else{
                session_start();
                $user = $result[0];
                $_SESSION['username'] = $user->username;
                $_SESSION['name'] = $user->name;
                $_SESSION['type'] = $user->type;
                
                header("Location:../views/dashboard.php");          
            }
        }
    }

    $userController = new UserController();

    $action = $_REQUEST["action"];
    
    switch($action){
        case 1:
            $userController->registerUser();
        case 2:
            $userController->login();
    }
    