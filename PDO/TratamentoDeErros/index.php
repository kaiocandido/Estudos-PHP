<?php

require_once  'Produto.php';

// Conexão PDO

$dns = 'mysql:host=localhost; dbname=crud_demo; charset-utf8';
$usuario = 'root';
$senha = '';

try {
    $pdo = new PDO($dns, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $produto = new Produto($pdo);


    echo $produto->inserir('teste', 'abc123');
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco:'. $e->getMessage();
}