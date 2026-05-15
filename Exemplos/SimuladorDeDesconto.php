<?php

$produtos = [
    "Notebook" => 3500,
    "Celular" => 5500,
    "Geladeira" => 3800,
    "Mesa" => 100,
];

function desconto($preco, $precoDescontoFixo): float {
    return  $preco - ($preco * $precoDescontoFixo / 100 );
};

$precoDescontoFixo = 2;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Desconto</title>
</head>
<body>
    <ul>
        <?php 
        foreach ($produtos as $produto => $valor) {
            echo "<li> <strong>$produto</strong><br>De <del>R$" . number_format( $valor, 2, ",", ".") . "</del> Para R$" . number_format( desconto($valor, $precoDescontoFixo), 2, ",", "."); 
        }
         ?>
    </ul>
</body>
</html>