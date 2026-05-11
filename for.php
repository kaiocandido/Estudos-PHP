<?php

    //lista de cursos

    $listaDeCursos = ["PHP", "GO", "JAVA", "REACT"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo FOR</title>
</head>
<body>
    <form action="" method="post">
        <label for="curso">Curso:</label>
        <select name="curso" id="curso">
            <?php
                for ($i=0; $i < count($listaDeCursos); $i++) { 
                    ?>
                    <option value="<?php echo $listaDeCursos[$i]; ?>"> <?php echo $listaDeCursos[$i]  ?>
                </option>
                <?php
                }
            ?>
        </select>
        <button>ENVIAR</button>
    </form>
</body>
</html>