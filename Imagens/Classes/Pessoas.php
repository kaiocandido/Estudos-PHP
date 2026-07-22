<?php

class Pessoa{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function inserir($nome, $email){
        $sql = $this->pdo->prepare("INSERT INTO pessoas (nome, email) VALUES (:nome,  :email");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->execute();

        return $this->pdo->lastInsertId();
    }

    public function listarPessoas(){
        try {
            $sql = $this->pdo->query("SELECT * FROM pessoas  ORDEM BY id DESC");
            
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException | Exception $e) {
            return array();
        }
    }
}