<?php

// funcao de arredondamento de numero

$value = 2.89;
$valueMax = 3;

echo round($value);
echo "</br>";
echo round($value, 1);
echo "</br>";

// arredondamento direcional floor arredonda para baixo, ceil arredonda para cima.

echo floor($value);
echo "</br>";
echo ceil($value);
echo "</br>";
 
// encontrando extremos max() retorna o maior valor, min() retorna o menor valor... Aceita varios valores!!!

echo max($value, $valueMax);
echo "</br>";
echo min($value, $valueMax);
echo "</br>";

// geração aleatoria rand(), gera numeros aleatorios

echo rand(0, 10);
echo "</br>";

// valor absoluto abs()

echo abs($value);


// raiz quadrada de um numero sqrt()

echo sqrt($valueMax);
echo "</br>";

// elevar um numero na potencia pow()

echo pow($valueMax, 2);
echo "</br>";

// verificar se é um numero is_numeric()

echo is_numeric($value);