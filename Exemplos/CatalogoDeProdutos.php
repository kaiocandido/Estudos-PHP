<?php
    $produtos = [
        "Notebook" => ["preco" => 3500, "Estoque" => 15],
        "Celular" => ["preco" => 5500, "Estoque" => 20],
        "Geladeira" => ["preco" => 3800, "Estoque" => 4],
        "Mesa" => ["preco" => 500, "Estoque" => 2],
    ]; 


    function desconto($preco, $precoDescontoFixo): float {
    return  $preco - ($preco * $precoDescontoFixo / 100 );
    };


    $valorDesconto = 10;

    function somarProdutos($qdt, $preco, $valorDesconto): float{
       $result = $qdt * $preco;
       $valorFinal = desconto($result, $valorDesconto);
       return $valorFinal;
    };


    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de produtos</title>
</head>
<body>
    <h1>Catalogo de produtos</h1>
    <ul>
        <?php 
        foreach ($produtos as $produto => $dados ) {
            echo "<li> <strong>$produto</strong><br>Preço R$" . number_format( (int) $dados["preco"], 2, ",", ".") . "<br> Estoque: " . $dados["Estoque"] ; 
        }
         ?>
    </ul>

    <H2>Resumo do carrinho</H2>


</body>
</html>

