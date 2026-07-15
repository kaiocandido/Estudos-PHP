<?php

// Criando conexão com banco de dados
try{
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Preparando consulta
    $stmt = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");

    //Bind dos parametros
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);

    // Definindo valores
    $name = "Kaio";
    $id = 1;

    //Executando consulta
    $stmt->execute();

    echo "Usuario atualizado com sucesso!";
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}