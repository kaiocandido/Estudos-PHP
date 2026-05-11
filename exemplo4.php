<?php
$produtos = [
    [
        'id' => 1,
        'nome' => 'Camiseta',
        'preco' => 49.90,
        'estoque' => 150
    ],
    [
        'id' => 2,
        'nome' => 'Calça Jeans',
        'preco' => 129.90,
        'estoque' => 80
    ],
    [
        'id' => 3,
        'nome' => 'Tênis Esportivo',
        'preco' => 299.90,
        'estoque' => 30
    ]
];


$cont = 1;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            box-sizing: border-box;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 20px;
        }
        .produto {
            align-items: center;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .produto:hover {
            transform: translateY(-10px);
        }
        .produto img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        h2 {
            font-size: 24px;
            margin-top: 10px;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
        }
        .preco {
            font-size: 20px;
            color: #e74c3c;
            font-weight: bold;
        }
        .estoque {
            font-size: 16px;
            color: #2ecc71;
        }
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>Catálogo de Produtos</h1>
</header>

<div class="container">
    <?php foreach ($produtos as $produto){ ?>
        <div class="produto">
            <h2><?php echo $produto['nome']; ?></h2>
            <p class="preco">R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
            <p class="estoque">Estoque: <?php echo $produto['estoque']; ?> unidades</p>
        </div>
     <?php 
    } 
    ?>
</div>

<footer>
    <p>&copy; 2025 Loja Online. Todos os direitos reservados.</p>
</footer>

</body>
</html>
