<?php

$exemplo = [1, 2, 3, 4, 5];

// count() mostra a quantidade de elementros do array
echo count($exemplo);
echo "</br>";

// adiciona elemento no final do array array_push()
array_push($exemplo, 100);
print_r($exemplo); // exibe o array pois o echo não consegue!!
echo "</br>";

// remover o ultimo elemento array_pop()
array_pop($exemplo);
array_pop($exemplo);
print_r($exemplo);
echo "</br>";

// verifica se existe o valor no array in_array()
if (in_array("1", $exemplo)) {
    echo "existe";
}else {
    echo "nao existe";
}
echo "</br>";

// remove o primeiro elemento do array array_shift()
array_shift($exemplo);
print_r($exemplo);
echo "</br>";

// adiciona elementos no inicio do array array_unshift()
array_unshift($exemplo, "100");
print_r($exemplo);
echo "</br>";

// retorna todos valores de um array assosiativo array_values()
$exemploAssosiativo = [ "nome" => "kaio", "idade" => 20];
print_r(array_values($exemploAssosiativo));
echo "</br>";

// retorna as chaves de um array assosiativo array_keys()
print_r(array_keys($exemploAssosiativo));
echo "</br>";
