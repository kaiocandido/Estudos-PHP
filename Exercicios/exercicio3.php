<?php

declare(strict_types=1);

/*
 * Função auxiliar.
 *
 * Objetivo:
 * transformar uma palavra em uma versão "normalizada",
 * com letras minúsculas e ordenadas.
 *
 * Exemplo:
 * "stone" vira "enost"
 * "tones" vira "enost"
 */
function ordenarLetras(string $word): string
{
    // Converte a palavra para minúsculo
    // Ex: "Stone" vira "stone"
    $word = strtolower($word);

    // Quebra a palavra em letras
    // Ex: "stone" vira ["s", "t", "o", "n", "e"]
    $letters = str_split($word);

    // Ordena as letras em ordem alfabética
    // Ex: ["s", "t", "o", "n", "e"]
    // vira ["e", "n", "o", "s", "t"]
    sort($letters);

    // Junta as letras novamente em uma string
    // Ex: ["e", "n", "o", "s", "t"] vira "enost"
    return implode("", $letters);
}

/*
 * Função principal.
 *
 * Recebe:
 * $word     -> palavra alvo
 * $anagrams -> lista de palavras candidatas
 *
 * Retorna:
 * apenas as palavras que são anagramas da palavra alvo.
 */
function detectAnagrams(string $word, array $anagrams): array
{
    // Array onde serão guardados os anagramas encontrados
    $result = [];

    // Palavra alvo em minúsculo
    // Usado para impedir que a própria palavra seja considerada anagrama
    $wordLower = strtolower($word);

    // Palavra alvo com letras ordenadas
    // Ex: "stone" vira "enost"
    $wordSorted = ordenarLetras($word);

    // Percorre cada palavra candidata
    foreach ($anagrams as $anagram) {

        // Candidata em minúsculo
        $anagramLower = strtolower($anagram);

        // Se a candidata for exatamente a mesma palavra,
        // ignorando maiúsculas/minúsculas, ela NÃO é anagrama.
        //
        // Ex:
        // "BANANA" e "banana" não contam como anagrama.
        if ($anagramLower === $wordLower) {
            continue;
        }

        // Ordena as letras da candidata
        // e compara com a palavra alvo ordenada.
        //
        // Ex:
        // "tones" vira "enost"
        // "stone" vira "enost"
        //
        // Como são iguais, é anagrama.
        if (ordenarLetras($anagram) === $wordSorted) {
            $result[] = $anagram;
        }
    }

    // Retorna todos os anagramas encontrados
    return $result;
}