<?php

$categorias = [
    ["id" => 1, "nome" => "eletronicos"],
    ["id" => 2, "nome" => "roupas"],
    ["id" => 3, "nome" => "livros"],
    ["id" => 4, "nome" => "moveis"],
    ["id" => 5, "nome" => "alimentos"],
];

?>

<form action="processar.php" method="POST">
    <label for="categoria">Escolha</label>
    <select name="categoria" id="categoria">
        <option value="">Selecione...</option>
        <?php
            $i = 0;
            while($i < count($categorias)){
        ?>
            <option value= "<?php echo $categorias[$i]['id'] ?>">
                 <?php echo $categorias[$i]["nome"];?>
            </option>
            <?php
            $i++;
            }
            ?>
    </select>
    <button type="submit">Enviar</button>
</form>

