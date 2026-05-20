<?php 

class Carros {
    public $modelo;
    public $cor;
    public $ano;
    public $quilometragem;
    public $ligado;

    //metodos

    public function ligar(){
        if ($this->ligado){
            echo "O carro já esta ligado \n";
        } else {
            $this->ligado = true;
            echo "O carro foi ligado. \n";
        }
    }
    
    public function desligar(){
        if (!$this->ligado){
            echo "O carro já esta desligado \n";
        } else {
            $this->ligado = false;
            echo "O carro foi desligado. \n";
        }
    }

    public function dirigir($km){
        if($this->ligado){
            $this->quilometragem += $km;
            echo "Voce dirigiu por $km quilometros. \n";
        }else{
            echo "O carro precisa estar ligado para ser dirigido. \n";
        }
    }

    public function obterQuilometragem(){
        echo "Quilometragem é $this->quilometragem km \n";
    }

    public function pintar($novaCor){
        $this->cor = $novaCor;
        echo "A nova cor do carro é $novaCor";
    }

    public function exibirInformacoes(){
        echo "Modelo: " . $this->modelo . "<br/>";
        echo "Cor: " . $this->cor . "<br/>";
        echo "Ano: " . $this->ano . "<br/>";
        echo "Quilometragem: " . $this->quilometragem . "<br/>";
        echo "Ligado: " .($this->ligado ? "Ligado" : "Desligado"). "<br/>";
    }

    public function trocarModelo($novoModelo){
        $this->modelo = $novoModelo;
        echo "O novo modelo do seu carro é $novoModelo \n";
    }

}

$meuCarro = new Carros();


$meuCarro->modelo = "Gol G5";
$meuCarro->cor = "preto";
$meuCarro->ano = 2012;
$meuCarro->quilometragem = 100;
$meuCarro->ligado = false;


$meuCarro->exibirInformacoes();
echo "</br>";

$meuCarro->ligar();

$meuCarro->exibirInformacoes();
echo "</br>";
$meuCarro->dirigir(10);
$meuCarro->exibirInformacoes();

