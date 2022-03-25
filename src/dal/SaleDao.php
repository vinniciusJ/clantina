<?php
    require_once __DIR__ . "/connection.php";

    class SaleDao {
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }

        function insertSale(Sale $sale, $idSeller) {
            $sql = "INSERT INTO sale(´value´, ´date´, ´idUser´, ´type´)
            VALUES ('{$sale->getValue()}', '{$sale->getDate()}', '{$sale->getIdUser()}', '{$sale->getType()}'";
            $idSale = $this->conn->exec($sql);

            $sql = "UPDATE item SET id_sale = '{$idSale}' WHERE status = 'active' AND id_seller = '{$idSeller}'";
            $this->conn->exec($sql);
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