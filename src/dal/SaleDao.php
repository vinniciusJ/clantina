<?php
    require_once __DIR__ . "/connection.php";

    class SaleDao {
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }

        function registerSale(Sale $sale) {
            $sql = "INSERT INTO sale(`value`, `id_seller`, `id_client`, `type`, `change`, `payed_value`, `note`)
            VALUES ('{$sale->getValue()}', '{$sale->getIdSeller()}', '{$sale->getIdClient()}', '{$sale->getType()}', '{$sale->getChange()}', '{$sale->getPayedValue()}', '{$sale->getNote()}')";                        
            $this->conn->exec($sql);
            $idSale = $this->conn->lastInsertId();
            return $idSale;
        }

        function listAllSales() {
            $sql = "select sale.id_sale, sale.value, sale.type, sale.change, sale.payed_value, sale.date, sale.note, client.name as client, seller.name as seller from sale
            inner join user as client on sale.id_client = client.id_user
            inner join user as seller on sale.id_seller = seller.id_user;";
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function listSalesFromSeller($idSeller) {
            $sql = "select sale.id_sale, sale.value, sale.type, sale.change, sale.payed_value, sale.date, sale.note, user.name as client from sale
            inner join user on sale.id_client = user.id_user
            where sale.id_seller = {$idSeller};";
            $sql;
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }        
    }
?>