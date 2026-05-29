<?php

class Aluno {
    public $nome;
    public $nota;
    public $nota2;
    public $nota3;
    public $nota4;

    public function calcularMedia($nome, $nota, $nota2, $nota3, $nota4 ){
        $media = ($nota + $nota2 + $nota3 + $nota4) / 4;

        if ($media >= 7 ){
            echo "Aluno $nome foi aprovado com a media $media";
        }else {
            echo "Aluno $nome foi reprovado com a media $media";
        }
    }
    
} 


$kaio = new Aluno();

$kaio->calcularMedia("Kaio", 10, 5, 6, 9);

