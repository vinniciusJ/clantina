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
            $note = $_POST['note'];

            $sale = new Sale($value, $idSeller, $type, $change, $payedValue, $idClient, $note);                        
            $idSale = $this->saleDao->registerSale($sale);            

            for ($i=0; $i < count($quantity); $i++) { 
                $this->itemDao->updateSoldItems($items[$i], $quantity[$i], $idSeller, $idSale);
            }
            header("Location:../views/dashboard.php");  
            exit();
        }

        function listSales(){
            session_start();
            $allReceivedMoney = 0;
            $allSpentMoney = 0;

            if($_SESSION["type"] == "seller"){                
                $sellerId = $_SESSION["idUser"];
                $sales = $this->saleDao->listSalesFromSeller($sellerId);
                $salesItems = [];                
    
                foreach($sales as $sale){      
                    $allReceivedMoney += $sale->value;              
                    array_push($salesItems, $this->itemDao->listAllItemsFromSaleGroupedByCategory($sale->id_sale));
                }
                $allSpentMoney = $this->itemDao->calculateAllPurchasePriceOfInactiveItemsFromSeller($sellerId)[0]->cost;
                $profit = $allReceivedMoney - $allSpentMoney;                    

                $_SESSION["allReceivedMoney"] = $allReceivedMoney;
                $_SESSION["allSpentMoney"] = $allSpentMoney;
                $_SESSION["profit"] = $profit;
                $_SESSION["sales"] = $sales;
                $_SESSION["salesItems"] = $salesItems;
    
                header("Location:../views/sales.php");
                exit();
            } else{
                $sales = $this->saleDao->listAllSales();
                $salesItems = [];                
                                
    
                foreach($sales as $sale){                    
                    $allReceivedMoney += $sale->value;
                    $items = $this->itemDao->listAllItemsFromSaleGroupedByCategory($sale->id_sale);                    
                    array_push($salesItems, $items);
                }
                $allSpentMoney = $this->itemDao->calculateAllPurchasePriceOfInactiveItems()[0]->cost;                
                $profit = $allReceivedMoney - $allSpentMoney;                    

                $_SESSION["allReceivedMoney"] = $allReceivedMoney;
                $_SESSION["allSpentMoney"] = $allSpentMoney;
                $_SESSION["profit"] = $profit;
                $_SESSION["sales"] = $sales;
                $_SESSION["salesItems"] = $salesItems;
    
                header("Location:../views/sales.php");
                exit();
            }
        }
      
    }
    
    $saleController = new SaleController();
    $action = $_REQUEST["action"];        
    echo $action;
    
    switch($action){
        case 1:
            $saleController->registerNewSale();
            break;
        case 2:
            $saleController->listSales();
            break;
        default:
            $saleController->configureRegisterPage();
    }
    