<?php

// Criando conexão com banco de dados
try{
    $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Realizando consulta
    $stmt = $pdo->query("SELECT * FROM users");

    // Exibindo resultados
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "ID: " . $row['id'] . "- Nome: " . $row['name'] . "- Email: " . $row['email'] . "<br>"; 
    }
}catch(PDOException $e){
    echo "Erro: " . $e->getMessage();
}