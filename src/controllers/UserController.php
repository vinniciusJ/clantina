<?php
    require_once __DIR__ . "../dal/UserDao.php";
    require_once __DIR__ . "../models/User.php";

    class UserController{
        private $dao;
        private $model;
        private $action;
        
        function __construct(){
            $this->dao = new UserDao();
            $this->model = new User();
        }
    }