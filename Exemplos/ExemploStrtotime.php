<?php

//Converte uma data para timestamp

//Data especifica 

$dataEspecifica = "2025-03-01";

// Converter data especifica para timestamp Unix
$dataEspecificaConvertida = strtotime($dataEspecifica);

// Obter timestamp atual
$timesTampAtual = time();

// Calcular a diferença em segundos
$diferenca =  $timesTampAtual - $dataEspecificaConvertida;

// converter a diferença de segundos para dias
$dias = floor($diferenca / (60 * 60 * 24));

echo "dias passados desde " .  $dataEspecifica . ": " . $dias . "</br>";

// getdate

date_default_timezone_set("America/Sao_Paulo");

$dataNova = getdate();
echo "Ano: " . $dataNova["year"] . "</br>";
echo "Mes: " . $dataNova["mon"] . "</br>";
echo "Dia: " . $dataNova["mday"] . "</br>";
echo "Hora: " . $dataNova["hours"] . "</br>";