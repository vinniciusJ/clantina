<?php
    require_once __DIR__ . "/connection.php";
    
    class UserDao{
        private $conn;
        function __construct(){
            $this->conn = Connection::connect();
        }
        
        function insertUser(User $user){
            $sql = "insert into `user`(`name`, `username`, `password`, `type`) values ('{$user->getName()}', '{$user->getUsername()}', '{$user->getPassword()}', '{$user->getType()}')";
            $this->conn->exec($sql);
        }

        function listAll(){
            $sql = "select * from user";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }

        function checkIfMatchPassword($username, $password){
            $sql = "select * from user where username = '{$username}' and password = '{$password}'";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);            
            return $dados;
        }

        function listAllClients(){
            $sql = "select id_user, name from user where type = 'client'";
            $query = $this->conn->query($sql);
            $dados = $query->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        }
    }