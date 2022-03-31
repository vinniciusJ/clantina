<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    

    require_once __DIR__ . "/../dal/ItemDao.php";
    require_once __DIR__ . "/../models/Item.php";

    class ItemController{
        private $dao;        
        
        function __construct(){
            $this->dao = new ItemDao();            
        }

        function listStorageItems(){
            session_start();

            if($_SESSION['type'] == 'seller'){
                $_SESSION["list-items"] = $this->dao->listActiveItemsFromSellerWithId($_SESSION['idUser']);                
            } else{
                $_SESSION["list-items"] = $this->dao->listAllActiveItemsGroupedByCategory();               
            }
            header("Location: ../views/storage.php");     
            exit();                
        }

        function listItemFromCategory(){
            session_start();            

            if($_SESSION['type'] == 'seller'){
                $_SESSION['list-items'] = $this->dao->listAllActiveItemsFromSellerAndCategory($_SESSION['idUser'], $_GET['id']);
                $_SESSION['itemTypeId'] = $_GET['id'];
            } else{
                $_SESSION['list-items'] = $this->dao->listAllActiveItemsFromCategory($_GET['id']);
            }
            header("Location: ../views/item.php");     
            exit();                
        }

        function updateItemsFromSeller(){
            session_start();
            var_dump($_SESSION);
            $this->dao->updateItemsPriceFromSeller($_SESSION["idUser"], $_SESSION["itemTypeId"], $_POST["price"]);
            header("Location: ../views/dashboard.php");     
            exit(); 
        }
    }

    $itemController = new ItemController();

    $action = $_REQUEST["action"];
    
    switch($action){
        case 1:
            $itemController->listItemFromCategory();
            break;
        case 2:
            $itemController->listStorageItems();
            break;  
        case 3:
            $itemController->updateItemsFromSeller();
            break;

        default:
            $itemController->listStorageItems();
    }
    