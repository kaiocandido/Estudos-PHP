<?php
// ==
// Igual: compara apenas os valores

// ===
// Idêntico: compara valor e tipo

// !=
// Diferente: verifica se os valores são diferentes

// <>
// Diferente: alternativa ao !=

// !==
// Não idêntico: compara valor e tipo diferentes

// >
// Maior que

// <
// Menor que

// >=
// Maior ou igual

// <=
// Menor ou igual

// <=>
// Spaceship: retorna -1, 0 ou 1 dependendo da comparação

// &&
// AND lógico: verdadeiro se ambas condições forem verdadeiras

// ||
// OR lógico: verdadeiro se uma das condições for verdadeira

// !
// NOT lógico: inverte o valor booleano

// ?:
// Operador ternário: condição curta

// ??
// Null coalescing: define valor padrão caso seja null

// if
// Executa bloco se condição for verdadeira

// else
// Executa bloco alternativo

// elseif
// Adiciona condição extra

// switch
// Estrutura de múltiplos casos

// match
// Estrutura moderna de múltiplos casos (PHP 8+)

// isset()
// Verifica se variável existe e não é null

// empty()
// Verifica se variável está vazia

// is_int()
// Verifica se é inteiro

// is_float()
// Verifica se é decimal

// is_string()
// Verifica se é string

// is_bool()
// Verifica se é booleano

// is_array()
// Verifica se é array

// is_object()
// Verifica se é objeto

// is_null()
// Verifica se é null


//Exemplo simples de if/else if e / else

$idade = 20;
if ($idade >= 18) {
    echo"Voce tem " . $idade . " esta apto a dirigir!!";
} elseif($idade >= 16) {
    echo"Voce mora no brasil com essa " . $idade . " só é permitido andar de patins!!";
} else {
    echo"KKKKK boa sorte jaja começa a crescer a barba!!!";
}

// SWITCH CASE
?>

<?php
switch ($idade) {
    case 20:
        echo"Parabens vc é maior de idade!!";
        break;
    case 17:
        echo"voce é menor de idade";
        break;
    default:
        echo"Erro digite um numero valido!";
        break;
}

?>