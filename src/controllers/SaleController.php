<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    

    require_once __DIR__ . "/../dal/SaleDao.php";
    require_once __DIR__ . "/../dal/UserDao.php";
    require_once __DIR__ . "/../models/Sale.php";

    class SaleController{
        private $saleDao;
        private $userDao;        
        private $itemDao;        

        
        function __construct(){
            $this->saleDao = new SaleDao();    
            $this->userDao = new UserDao();            
            $this->itemDao = new ItemDao();            
        }

        function configureRegisterPage(){
            session_start();                        
            $_SESSION["list-clients"] = $this->userDao->listAllClients();
            $_SESSION["list-items"] = $this->itemDao->listActiveItemsFromSeller($_SESSION["idUser"]);
            header("Location:../views/new-sale.php");  
        }
      
    }
    
    $saleController = new SaleController();
    $action = $_REQUEST["action"];    
    
    switch($action){
        case 1:
            echo "banana";
        default:
            $saleController->configureRegisterPage();
    }
    