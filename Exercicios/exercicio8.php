<?php

function crypto_square(string $plaintext)
{

    if (empty(trim($plaintext))) {
        return "";
    }

    $tudoJunto = preg_replace('/[^a-z0-9]/i', '', $plaintext);
    $palavraMinuscula = strtolower($tudoJunto);

    $letras = strlen($palavraMinuscula);

    $c = (int) ceil(sqrt($letras));
    $r = floor(sqrt($letras));

    if ($letras === 0) return "";
    if ($r * $c < $letras) $r += 1;222222222222222;

    $dividasEmC = str_split($palavraMinuscula, $c);

    $codigo = '';


    for ($row = 0; $row < $r; $row++) {
        for ($col = 0; $col < $c; $col++) {
            $char = isset($dividasEmC[$row][$col]) ? $dividasEmC[$row][$col] : ' ';
            $codigoPorColuna[$col] .= $char;
        }
        $codigo = implode(' ', $codigoPorColuna);
    }


    return $codigo;


}

echo crypto_square("If man was meant to stay on the ground, god would have given us roots.");