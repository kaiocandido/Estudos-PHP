<?php

class Gerente extends Funcionario{
    private $departamento;

    public function __construct($nome, $idade, $salario, $departamento)
    {
        parent::__construct($nome, $idade, $salario);
        $this->departamento = $departamento;
    }
    
    public function getDepartamento(){
        return $this->departamento;
    }

    public function setDepartamento($departamento){
        $this->departamento = $departamento;
    }

    #[Override]
    public function exibirInfos()
    {
        parent::exibirInfos();
        echo "Departamento: " .$this->getDepartamento();
    }

    #[Override]
    public function calcularBonus($bonus)
    {
        return $this->getSalario() * 5 + 200;
    }
}