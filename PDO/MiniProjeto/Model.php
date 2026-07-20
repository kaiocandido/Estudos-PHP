<?php

class Model {
    protected $conn;

    public function __construct()
    {
        $host = 'localhost';
        $dbName = 'crud_test';
        $userName = 'root';
        $passWord = '';
        try {
        $this->conn = new PDO(
            "mysql:host=$host;dbname=$dbName;charset=utf8",
            $userName,
            $passWord
        );
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }
}