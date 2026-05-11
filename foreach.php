<?php

    //lista de cursos

    $listaDeCursos = ["PHP", "GO", "JAVA", "REACT"];

    $produtos = [
        "produto1" => "Banana",
        "produto2" => "Uva",
        "produto3" => "Maça",
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo FOR</title>
</head>
<body>
    <?php 
        foreach ($listaDeCursos as $cursos) {
            
        echo $cursos ?> </br> <?php
    }
    ?>


    <?php 
    foreach ($produtos as $key => $prodts){
        echo "chave: " . $key . " valor: " . $prodts ?> </br>
        <?php 
    }

     ?>
</body>
</html>