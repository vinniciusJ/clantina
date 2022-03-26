<?php
    require_once __DIR__ . "/connection.php";

    class ItemTypeDao {
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }

        function insertItemType(ItemType $itemType) {
            $sql = "INSERT INTO itemType (name) VALUE ('{$itemType->getName()}'";
            $this->conn->exec($sql);
        }

        function listItemTypes() {
            $sql = "SELECT * FROM itemType";
            $query = $this->conn->query($sql);
            $data = $query->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
    }
?>