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
            $this->conn->exec($sql);
        }

        function listAllItems(){
            $sql = "select * from item";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }

        function listAllActiveItems(){
            $sql = "select * from item where status = 'active'";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }
    }