<?php

$letras = "aAaa2aaaaaassssws AAAAA kaio";
$letrass = "chegyei AAAAA kaio";

// verificar tamanho da string strlen()

echo strlen($letras);
echo "</br>";

// contar palavras str_world_count()

echo str_word_count($letras);
echo "</br>";

// extraindo parte da string substr()

echo substr($letras, 0, 5);
echo "</br>";

// encontrando substring strpos()
echo strpos($letras, "kaio");
echo "</br>";

//substituindo textos str_replace()

echo str_replace("kaio", "Vai da bom", $letras);
echo "</br>";

// formatação strtoupper() transforma a letra em maiscula, strtolower() transforma em minuscula, ucwords() primeira letra maiscula

echo strtoupper($letras);
echo "</br>";
echo strtolower($letras);
echo "</br>";
echo ucwords($letrass);