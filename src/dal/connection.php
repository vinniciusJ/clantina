<?php
    include_once('database_info.php');	
			
    class Connection
    {
        static function connect()
        {
            try {
                $host = $_ENV["dbhost"];
	            $user = $_ENV["user"];
	            $password = $_ENV["password"];
	            $dbname = $_ENV["db"];
                $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }