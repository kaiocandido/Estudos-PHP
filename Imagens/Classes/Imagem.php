<?php

class Imagem{
    
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarPorPessoa($pessoa_id){
        try {
        $sql = $this->pdo->prepare("SELECT * FROM pessoa_imagens WHERE pessoa_id = :pessoa_id");
        $sql->bindValue(':pessoa_id', $pessoa_id);
        $sql->execute();

        return $sql->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException | Exception $e) {
            return array();
        }

    }


    private function obterImagem($id){
        try {
        $sql = $this->pdo->prepare("SELECT * FROM pessoa_imagens WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException | Exception $e) {
            return array();
        }

    }

    
    private function deletarImagem($id){
        try {
        $sql = $this->pdo->prepare("DELETE  FROM pessoa_imagens WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        } catch (PDOException | Exception $e) {
            return null;
        }

    }

    private function inserirImagemPessoa($dados){
        
        $sql = $this->pdo->prepare("INSERT INTO pessoa_imagens 
                                            (
                                                pessoa_id, 
                                                nome_original, 
                                                nome_arquivo, 
                                                caminho, 
                                                tipo_mime, 
                                                tamanho
                                            )  
                                    VALUES  (
                                                :pessoa_id, 
                                                :nome_original, 
                                                :nome_arquivo, 
                                                :caminho, 
                                                :tipo_mime, 
                                                :tamanho)"
                                    );

        $sql->bindValue(':id', $dados['pessoa_id']);
        $sql->bindValue(':nome_original', $dados['nome_original']);
        $sql->bindValue(':nome_arquivo', $dados['nome_arquivo']);
        $sql->bindValue(':caminho', $dados['caminho']);
        $sql->bindValue(':tipo_mime', $dados['tipo_mime']);
        $sql->bindValue(':tamanho', $dados['tamanho']);
        
        $sql->execute();

        
    }


    public function excluir(){

    }

    public function incluirImagem(){

    }

}