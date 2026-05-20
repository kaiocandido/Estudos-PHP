<?php

class Carro {

    //Atributos
    public $marca; 
    public $modelo; 
    public $ano;

    //metodo da classe para exibir as informações
    public function exibirInformacoes(){
        echo "Marca: " . $this->marca . "<br/>";
        echo "Modelo: " . $this->modelo . "<br/>";
        echo "Ano: " . $this->ano . "<br/>";
    }


}

// Criando um objeto Carro

$carro = new Carro();

$carro->marca = "Volksvagem";
$carro->modelo = "Gol G5";
$carro->ano = 2012;


$carro->exibirInformacoes();