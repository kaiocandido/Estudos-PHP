<?php

function acronym(string $text): string
{
    $listPalavras = [];
    $text = str_replace("-", " ", $text);
    $listPalavras = explode(" ", $text);
    $result = "";
    foreach ($listPalavras as $palavras) {
        $result .= strtoupper($palavras[0]);
    }

    return $result;
}