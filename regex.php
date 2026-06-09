<?php



//preg_match() -> procura por um padrão em uma string e retorna true se encontrar ou false caso contrário

$texto = "Hoje é dia 25.";
preg_match("/\d+/", $texto, $match);
print_r($match);

//preg_match_all() -> procura por um padrão em uma string e retorna o número de ocorrências encontradas


//preg_replace() -> substitui partes de uma string usando uma expressão regular

$texto = "Hoje é dia 25.";
$limpo = preg_replace("/\d+/", "***", $texto);
echo $limpo;


//preg_replace_callback()-> substitui partes de uma string usando uma expressão regular

$texto = "Hoje é dia 25 ou 30.";
$limpo = preg_replace_callback("/\d+/", function($match){
    return $match[0] * 2;
}, $texto);
echo $limpo;

//preg_split() -> divide uma string usando uma expressão regular como delimitador

$texto = "Um, dois; tres e quatro";
$limpo = preg_split("/[,;e]\s*/", $texto);
print_r($limpo);


//preg_grep() -> faz uma busca por um padrão e retorna os elementos do array que correspondem a esse padrão

$nomes = ["kaio", "joão", "matue", "Ana"];

$filtrados = preg_grep("/^A/", $nomes);
print_r($filtrados);