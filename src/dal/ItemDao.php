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
            $sql = 
            "select count(id_item) as quantity, avg(item.price) as price, it.name, it.id_item_type as id_type from item
            inner join item_type as it on item.id_item_type = it.id_item_type 
            inner join user on item.id_seller = user.id_user
            where item.status = 'active' and item.id_seller = {$sellerId}
            group by item.id_item_type;";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        
        }

        function listActiveItemsFromSellerWithId($sellerId){
            $sql = 
            "select it.id_item_type as id, it.name as name from item
            inner join item_type as it on item.id_item_type = it.id_item_type 
            inner join user on item.id_seller = user.id_user
            where item.status = 'active' and item.id_seller = {$sellerId}
            group by item.id_item_type;";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);            
            return $dados;
        
        }

        function listAllActiveItemsGroupedByCategory(){
            $sql = 
            "select it.id_item_type as id, it.name as name from item
            inner join item_type as it on item.id_item_type = it.id_item_type 
            inner join user on item.id_seller = user.id_user
            where item.status = 'active'
            group by item.id_item_type;";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        
        }
        
        function listAllActiveItemsFromSellerAndCategory($sellerId, $itemTypeId){
            $sql = 
            "select avg(purchase_price) as purchase_price, count(id_item) as quantity, avg(item.price) as price, it.id_item_type as id, it.name as name from item
            inner join item_type as it on item.id_item_type = it.id_item_type 
            inner join user on item.id_seller = user.id_user
            where item.status = 'active' and item.id_seller = {$sellerId} and item.id_item_type = {$itemTypeId}
            group by item.id_item_type;";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);            
            return $dados;
        }

        function listAllActiveItemsFromCategory($itemTypeId){
            $sql = 
            "select count(id_item) as quantity, avg(item.price) as price, it.id_item_type as id, it.name as name, user.name as seller from item
            inner join item_type as it on item.id_item_type = it.id_item_type 
            inner join user on item.id_seller = user.id_user
            where item.status = 'active' and item.id_item_type = {$itemTypeId}
            group by item.id_seller;";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);            
            return $dados;
        }

        function updateSoldItems($item, $quantity, $idSeller, $idSale){
            $sql = "UPDATE item SET status = 'sold', id_sale = {$idSale}
                WHERE status = 'active' and id_item_type = {$item} and id_seller = {$idSeller} LIMIT $quantity";
            $this->conn->query($sql);            
        }
    }