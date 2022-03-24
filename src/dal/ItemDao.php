<?php
    require_once __DIR__ . "/connection.php";
    
    class ItemDao{
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }
        function insertUnsaledItem(Item $item){
            $sql = "insert into item(id_item_type, status, purchase_price, price) 
            values ('{$item->getIdItemType()}', '{$item->getStatus()}', '{$item->getPurchasePrice()}', '{$item->getPrice()}'";
        }
    }