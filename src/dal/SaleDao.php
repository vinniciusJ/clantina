<?php
    require_once __DIR__ . "/connection.php";

    class SaleDao {
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }

        function registerSale(Sale $sale) {
            $sql = "INSERT INTO sale(`value`, `id_seller`, `id_client`, `type`, `change`, `payed_value`)
            VALUES ('{$sale->getValue()}', '{$sale->getIdSeller()}', '{$sale->getIdClient()}', '{$sale->getType()}', '{$sale->getChange()}', '{$sale->getPayedValue()}')";                        
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

        function listSalesFromSeller($idSaler) {
            $sql = "SELECT * FROM sale WHERE idSaler = '{idSaler}'";
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }        
    }
?>