<?php

function saudacao(){
    echo "seja bem vindo!!";
}

saudacao();
echo "</br>";

// funcao com parametros

function saudacaoComNome(string $nome){
    echo "seja bem vindo " . $nome . "!!!";
}

saudacaoComNome("kaio");