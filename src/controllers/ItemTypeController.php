<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);    

    require_once __DIR__ . "/../dal/ItemTypeDao.php";
    require_once __DIR__ . "/../models/ItemType.php";

    class ItemTypeController{
        private $dao;        
        
        function __construct(){
            $this->dao = new ItemTypeDao();            
        }

        function registerItemType(){
            $itemType = new ItemType($_POST['item-type']);
            $this->dao->insertItemType($itemType);

            header("Location: ../views/item-types.php");
        }
    }

    $itemTypeController = new ItemTypeController();

    $action = $_REQUEST["action"];
    
    switch($action){
        case 1:
            $itemTypeController->registerItemType();
            break;
    }
    