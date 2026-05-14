<?php

$usuarios = [
    ["id" => 1, "nome" => "Kaio", "email" => "Kaio@gmail.com"], 
    ["id" => 1, "nome" => "Kamila", "email" => "Kamila@gmail.co"], 
    ["id" => 1, "nome" => "Katia", "email" => "Katia@gmail.co"], 
    ["id" => 1, "nome" => "Claudinei", "email" => "Claudinei@gmail.co"], 
    ["id" => 1, "nome" => "Maria Luisa", "email" => "Maria@gmail.co"],
];

$indece = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo3</title>
</head>
<body>
    <h1>Lista De Usuarios</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php 
            while ($indece < count($usuarios)) {
                echo "<tr>";
                    echo "<td>" . $usuarios[$indece]["id"] . "<ID>";
                    echo "<td>" . $usuarios[$indece]["nome"] . "<NOME>";
                    echo "<td>" . $usuarios[$indece]["email"] . "<EMAIL>";
                 echo "</tr>";
                $indece++;
            }

        ?>


    </table>
</body>
</html>