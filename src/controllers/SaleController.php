<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    

    require_once __DIR__ . "/../dal/SaleDao.php";
    require_once __DIR__ . "/../dal/UserDao.php";
    require_once __DIR__ . "/../dal/ItemDao.php";
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

        function registerNewSale(){  
            session_start();
            $_SESSION["list-clients"] = "";
            $_SESSION["list-items"] = "";

            $value =  $_POST["value"];
            $payedValue = $_POST["received-value"];
            $change = $_POST["change"];
            $type = $_POST["payment-method"];
            $idClient = $_POST["client"];
            $idSeller = $_SESSION["idUser"];
            $items = $_POST["items"];
            $quantity = $_POST["quantity"];

            $sale = new Sale($value, $idSeller, $type, $change, $payedValue, $idClient);                        
            $idSale = $this->saleDao->registerSale($sale);            

            for ($i=0; $i < count($quantity); $i++) { 
                $this->itemDao->updateSoldItems($items[$i], $quantity[$i], $idSeller, $idSale);
            }
            header("Location:../views/dashboard.php");  
        }
      
    }
    
    $saleController = new SaleController();
    $action = $_REQUEST["action"];        
    echo $action;
    
    switch($action){
        case 1:
            $saleController->registerNewSale();
            break;
        default:
            $saleController->configureRegisterPage();
    }
    