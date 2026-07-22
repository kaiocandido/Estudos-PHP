<?php

class Conexao {
    private const HOST = "localhost";
    private const BANCO = "trabalhando_imagens";
    private const USUARIO = 'root';
    private const SENHA = '';

    public static function conectarBanco(): PDO{

        try {
            $pdo = new PDO(
                'mysql:host='.self::HOST.';dbname='.self::BANCO.';charset=utf8mb4',
                self::USUARIO,
                self::SENHA,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );

            return $pdo;
        } catch (PDOException $e) {
            throw new Exception('Erro: '.$e->getMessage());
        }

    }
}