<?php

class Funcionario extends Pessoa{
    private $salario;

    public function __construct($nome, $idade, $salario)
    {
        parent::__construct($nome, $idade);  
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function exibirInfos(){
        parent::exibirInfos();
    echo "Salario R$: " .number_format($this->getSalario(), 2, ',', '.' ). "</br>";
    }

    public function calcularBonus($bonus){
        return $this->salario * $bonus;
    }


}