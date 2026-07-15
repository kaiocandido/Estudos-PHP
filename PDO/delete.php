<?php

// Criando conexão com banco de dados
try{
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Preparando consulta
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");

    //Bind dos parametros
    $stmt->bindParam(':id', $id);

    // Definindo valores
    $id = 1;

    //Executando consulta
    $stmt->execute();

    echo "Usuario deletado com sucesso!";
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}