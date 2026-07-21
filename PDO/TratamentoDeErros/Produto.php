<?php

require_once 'ErroHandler.php';

class Produto{
    private PDO $pdo;
    private ErroHandler $erro_handler;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->erro_handler = new ErroHandler($pdo);
    }

    public function inserir(string $nome, string $codigo): string {
        try {
            $sql= "INSERT INTO produtos (nome, codigo) VALUES (:nome, :codigo)";
            $smtm = $this->pdo->prepare($sql);
            $smtm->execute([':nome' => $nome, ':codigo' => $codigo]);

            return "Produto cadastrado com sucesso!!";
        } catch (Exception $e) {
            return $this->erro_handler->tratar($e);
        }
    }   

    public function simularErroColuna(): string {
        try {
            $this->pdo->query("SELECT coluna_invalida FROM produtos");
        } catch (Exception $e) {
            return $this->erro_handler->tratar($e);
        }
    }
    
    public function simularErroGeral(): string {
        try {
            $this->pdo->query("COMANDO_INVALIDO");
        } catch (Exception $e) {
            return $this->erro_handler->tratar($e);
        }
    }

    public function getErroHandler(): ErroHandler {
        return $this->erro_handler;
    }

}