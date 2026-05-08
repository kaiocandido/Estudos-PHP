<?php

// Função que recebe um array de palavras
function proverb(array $words): string
{
    // Variável que vai armazenar todas as frases
    $resultado = "";

    if ($words == []) {
        return throw new ErrorException();
    }

    // Percorre o array até o penúltimo item
    // usamos -1 porque vamos acessar o próximo índice ($i + 1)
    for ($i = 0; $i < count($words) - 1; $i++) {

        // Palavra atual do array
        $atual = $words[$i];

        // Próxima palavra do array
        $proximo = $words[$i + 1];

        // Concatena a frase na variável resultado
        // .= significa:
        // "pegue o valor atual e adicione mais texto"
        $resultado .= "For want of a $atual the $proximo was lost.\n";
    }

    // Após terminar o loop
    // adiciona a frase final usando o PRIMEIRO item do array
    $resultado .= "And all for the want of a " . $words[0] . ".";

    // Retorna todo o texto montado
    return $resultado;
}


// Array de exemplo
$lista = ["nail", "shoe", "horse", "rider"];


// Executa a função e imprime resultado
echo proverb($lista);