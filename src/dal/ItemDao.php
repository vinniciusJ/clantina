<?php
    require_once __DIR__ . "/connection.php";
    
    class ItemDao {
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }
        
        function insertUnsaledItem(Item $item){
            $sql = "INSERT INTO item(id_item_type, status, purchase_price, price) 
            VALUES ('{$item->getIdItemType()}', '{$item->getStatus()}', '{$item->getPurchasePrice()}', '{$item->getPrice()}'";
            $this->conn->exec($sql);
        }

        function listAllItems(){
            $sql = "SELECT * FROM item";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }

        function listAllActiveItems(){
            $sql = "SELECT * FROM item WHERE status = 'active'";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }

        function listActiveItemsFromSeller($sellerId){
            $sql = "SELECT * FROM item WHERE status = 'active' and id_seller = {$sellerId}";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }
    }