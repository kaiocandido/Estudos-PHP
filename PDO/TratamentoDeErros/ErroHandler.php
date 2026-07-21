<?php

class ErroHandler {
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function tratar(PDOException $e): string {
        $codigo = $e->getCode();

        $mensagem = $e->getMessage();

        if($codigo === '42S22'){
            "Erro: A coluna informada não existe";
        } elseif($codigo === '23000'){
            "Erro: Codigo do produto já cadastrado. Escolha outro";
        }else {
            $this->registrarErro($mensagem);
            return "Erro inesperado. Tente novamente mais tarde";
        }
    }

    private function registrarErro(string $mensagem): void{
        $sql = "INSERT INTO log_erros (mensagem) VALUES (:msg)";
        $smtm = $this->pdo->prepare($sql);
        $smtm->bindParam(':msg', $mensagem, PDO::PARAM_STR);
        $smtm->execute();
    }

    public function get_erros(): array {
        $sql = "SELECT id, mensagem, data_erro FROM log_erros ORDER BY data_erro DESC";
        $smtm = $this->pdo->query($sql);
        return $smtm->fetchAll(PDO::FETCH_ASSOC);
    }
}