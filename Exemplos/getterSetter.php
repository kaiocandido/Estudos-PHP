<?php

class Pessoa {
    private $nome;
    private $idade;
    private $email;
    private $cpf;

    public function setNome($nome){
        $nome = trim($nome);
        if(strlen($nome) < 3 ){
            throw new Exception("O nome deve ter pelo menos 3 caracteres!");
        }
        $this->nome = ucwords(strtolower($nome));
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade) {
        if($idade < 0){
            throw new Exception("Idade incorreta!!");
        } else if(!is_numeric($idade)){
            throw new Exception("Idade incorreta!!");
        }
        
        $this->idade = (int)$idade;
    }

    public function getIdade(){

        return $this->idade;
    }

    public function setCpf($cpf){

        $cpf = preg_replace("/\D/", "", $cpf);

        if (strlen($cpf) != 11){
            throw new Exception("Erro CPF invalido!!");
        }

        $this->cpf = $cpf;
    }

    public function getCpf(){
        return substr($this->cpf, 0, 3). '.' .
                substr($this->cpf, 3, 3).'.' .
                substr($this->cpf, 6, 3). '-' .
                substr($this->cpf, 9, 2);
    }

    public function setEmail($email){
        $email = trim($email);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Erro email invalido!");
        }

        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}