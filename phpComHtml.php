<?php

$logado = true;
$cargo = "adm";
?>

<?php

    if( $cargo == "adm"){
    ?>
    <p>Forma de usar PHP e HTML 1</p>
    <?php
    }

?>


<?php if($cargo == "adm"): ?>
    <h2>Forma 2 de fazer</h2>
    <p>testessss</p>
<?php elseif ($cargo == "func"): ?>
    <p>Funcionarioooooo</p>
<?php endif ?>
