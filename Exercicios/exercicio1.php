<?php

// testando operadores logicos

// Para logar o usuario tem que estar logado e ser adm ou chefe.

$logado = true;
$cargo = "chefe";

if ($logado && ($cargo == "adm" || $cargo == "chefe" )){
    echo"Logado com sucesso!!";
}else {
    echo"Erro no login!!!";
}

