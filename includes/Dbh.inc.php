<?php

class Dbh{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    private $charset;

    private function __construct(){
        $this->serverName = "localhost";
        $this->userName ="root";
        $this->password = "";
        $this->dbName = "users";

        $this->charset = "utf8mb4";
    }

    protected function connect(){
        
        try{
            //dsn = data source name
            $dsn = "mysql:host=" . $this->serverName . ";dbname=" . $this->dbName .
            ";charset=" . $this->charset;

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

}