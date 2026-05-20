<?php

class Carro {
    public $info;
    public $historicoViagens;

    public function __contruct(){
        $this->info = [
                "modelo" => "",
                "cor" => "",
                "ano" => "",
                "quilometragem" => 0,
                "ligado" => false,
        ];

        $this->historicoViagens = [];
    }

    public function ligar(){
        if($this->info["ligado"]){
            echo "O carro esta ligado";
        }else{
            $this->info["ligado"] = true;
             echo "O carro foi ligado </br>";
        }
    }

    public function desligar(){
        if (!$this->info["ligado"]){
            echo "O carro já esta desligado \n";
        } else {
            $this->info["ligado"] = false;
            echo "O carro foi desligado. \n";
        }
    }

    public function dirigir($km){
        if($this->info["ligado"]){
            $this->info["quilometragem"] += $km;

            $this->historicoViagens[] = [
                'distancia' => $km,
                'data' => date("Y-m-d H:i:s")
            ];
            echo "Voce dirigiu por $km quilometros. \n";
        }else{
            echo "O carro precisa estar ligado para ser dirigido. \n";
        }
    }

    public function obterQuilometragem(){
        echo "Quilometragem é " . $this->info["quilometragem"]. "km \n";
    }

    public function pintar($novaCor){
        $this->info["cor"] = $novaCor;
        echo "A nova cor do carro é $novaCor";
    }

    public function exibirInformacoes(){
        echo "Modelo: " . $this->info["modelo"]. "<br/>";
        echo "Cor: " . $this->info["cor"]. "<br/>";
        echo "Ano: " . $this->info["ano"] . "<br/>";
        echo "Quilometragem: " . $this->info["quilometragem"] . "<br/>";
        echo "Ligado: " .($this->info["ligado"] ? "Ligado" : "Desligado"). "<br/>";

    }

    public function exibirHistoricoDeViagem(){
        foreach ($this->historicoViagens as $viagens){
            echo "Segue o historico sendo a distancia: " . $viagens["distancia"]. "km na data " .$viagens["data"];
        }
    }
}

$meuCarro = new Carro();


$meuCarro->info["modelo"] = "Fusca";
$meuCarro->info["cor"] = "verde";
$meuCarro->info["ano"] = 2001;
$meuCarro->info["quilometragem"] = 1000;


$meuCarro->ligar(true);
echo "</br>";
$meuCarro->dirigir(20);
echo "</br>";
$meuCarro->obterQuilometragem();
echo "</br>";
$meuCarro->pintar("roxo");
echo "</br>";
$meuCarro->exibirInformacoes();
echo "</br>";
$meuCarro->exibirHistoricoDeViagem();