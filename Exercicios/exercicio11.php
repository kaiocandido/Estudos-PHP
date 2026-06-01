<?php

class Salario{
    public $nome;
    public $dependentes;
    public $rendaBrutaAnual;

    public function descontoDependentes($dependentes){
        $final = $dependentes * 600;
        return $final;
    }

    public function porcentagem($rendaBrutaAnual, $porcentagem){
        $imposto = $rendaBrutaAnual * ($porcentagem / 100);
        return $imposto;
    }   

    public function calculadoraImposto($nome, $dependentes, $rendaBrutaAnual){
        if ($rendaBrutaAnual <= 10000){
            $descontoDependentes = $this->descontoDependentes($dependentes);
            $salario = $rendaBrutaAnual - $descontoDependentes;

            echo "$nome seu salario é $salario de acordo com seus dados sendo o numero de dependentes: $dependentes 
            e renda bruta: $rendaBrutaAnual";
        } else if($rendaBrutaAnual <= 30000){
            $descontoDependentes = $this->descontoDependentes($dependentes);
            $salarioDesconto = $rendaBrutaAnual - $descontoDependentes;
            $porcentagemDesconto = $this->porcentagem($salarioDesconto, 5);

            $salario = $rendaBrutaAnual - $descontoDependentes - $porcentagemDesconto;

            echo "$nome seu salario é $salario de acordo com seus dados sendo o numero de dependentes: $dependentes 
            e renda bruta: $rendaBrutaAnual";
        } else if($rendaBrutaAnual <= 60000) {
            $descontoDependentes = $this->descontoDependentes($dependentes);
            $salarioDesconto = $rendaBrutaAnual - $descontoDependentes;
            $porcentagemDesconto = $this->porcentagem($salarioDesconto, 10);

            $salario = $rendaBrutaAnual - $descontoDependentes - $porcentagemDesconto;

            echo "$nome seu salario é $salario de acordo com seus dados sendo o numero de dependentes: $dependentes 
            e renda bruta: $rendaBrutaAnual";
        }else { 
            $descontoDependentes = $this->descontoDependentes($dependentes);
            $salarioDesconto = $rendaBrutaAnual - $descontoDependentes;
            $porcentagemDesconto = $this->porcentagem($salarioDesconto, 15);

            $salario = $rendaBrutaAnual - $descontoDependentes - $porcentagemDesconto;

            echo "$nome seu salario é $salario de acordo com seus dados sendo o numero de dependentes: $dependentes 
            e renda bruta: $rendaBrutaAnual";
        }
    }


}


$teste = new Salario();

$teste->calculadoraImposto("Kaio", 3, 30000);