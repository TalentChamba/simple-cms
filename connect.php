<?php

class databaseString {

    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname ="cms";

    protected function connectionString() {
    try{
        $dsn = "mysql:host={$this->dbhost}; dbname={$this->dbname}";
        $username = $this->dbuser;
        $password = $this->dbpass;
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch(Exception $e) {
    die("database could not connect". $e->getMessage());
    }

    }

}




?>