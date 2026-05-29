<?php

class Triangulo {
    public $x;
    public $y;
    public $z;

    public function verificar($x, $y, $z){
        if( ($x + $y) > $z  && ($x + $z) > $y && ($y + $z) > $x){
            if($x == $y && $x == $z){
                echo "É um triangulo Equilatero!!";
            } else if($x == $y || $x == $z){
                echo "É um triangulo Isosceles!!";
            }else{
                echo "É um triangulo Ecaleno!!";
            }
        }else {
            echo "Não é um trinagulo!!";
        }
    }
}


$teste = new Triangulo();

$teste->verificar(3, 3, 3);
echo "</br>";
$teste->verificar(3, 3, 5);
echo "</br>";
$teste->verificar(3, 4, 5);
echo "</br>";
$teste->verificar(1, 2, 3);