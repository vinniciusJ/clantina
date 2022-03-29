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

        function listAllSalesWithItems() {
            $sql = "SELECT * FROM sale";
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }

        function listSalesFromSeller($idSeller) {
            $sql = "select sale.id_sale, sale.value, sale.type, sale.change, sale.payed_value, sale.date, sale.note, user.name from sale
            inner join user on sale.id_client = user.id_user
            where sale.id_seller = {$idSeller};";
            $sql;
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }        
    }
?>