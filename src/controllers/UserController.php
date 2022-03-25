<?php
    require_once __DIR__ . "../dal/UserDao.php";
    require_once __DIR__ . "../models/User.php";

    class UserController{
        private $dao;        
        
        function __construct(){
            $this->dao = new UserDao();            
        }

        function registerUser(){
            $user = new User($_POST["name"], $_POST["username"], $_POST["password"], $_POST["type"]);            
            $this->dao->insertUser($user);
        }
    }

    $userController = new UserController();

    $action = $_REQUEST["action"];

    switch($action){
        case 1:
            $userController->registerUser();
    }
    