<?php

$produtos = [
    ["id" => 1, "nome" => "Laraja", "preco" => 2.00], 
    ["id" => 1, "nome" => "Banana", "preco" => 6.00], 
    ["id" => 1, "nome" => "Uva", "preco" => 10.00], 
    ["id" => 1, "nome" => "Mamão", "preco" => 5.00], 
    ["id" => 1, "nome" => "Pera", "preco" => 2.50],
];
$indice = 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo2</title>
</head>

<body>
    <table>
        <h1>Lista De Produtos</h1>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
    
        <?php
            //usando o WHILE para percorrer os produtos
            while ($indice < count($produtos)){
                echo "<tr>";
                echo '<td>' . $produtos[$indice]["id"] . "<TD>";
                echo '<td>' . $produtos[$indice]["nome"] . "<TD>";
                echo '<td>R$ ' . $produtos[$indice]["preco"] . "<TD>";
                $indice++;
            }
        ?>
    </table>
</body>
</html>