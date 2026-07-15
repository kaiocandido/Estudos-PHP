<?php

// Criando conexão com banco de dados
try{
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Preparando consulta
    $stmt = $pdo->prepare("INSERT INTO users(name, email) VALUES (:name, :email)");

    //Bind dos parametros
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);

    // Definindo valores
    $name = "Kaio";
    $email = "kaio@email.com";

    //Executando consulta
    $stmt->execute();

    echo "Usuario criado com sucesso!";
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}