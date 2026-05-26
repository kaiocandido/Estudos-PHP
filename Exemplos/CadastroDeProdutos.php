<?php

class CasdastroProduto {

    private $produtos = [];

    public function cadastrarProdutos($id, $nome, $preco){
        if($this->produtoExiste($id)){
            echo "Produto com ID $id já cadastrado.\n";
            return;
        }

        $this->produtos[] = [
            'id' => $id,
            'nome' => $nome,
            'preco' => $preco
        ];

        echo "Produto $nome cadastrado com sucesso!!\n";
    }

    
    public function alterarProduto($id, $nome, $preco){
        $index = $this->buscarProdutoPorID($id);

        if($index === -1){
            echo "Produto com não encontrado!!\n";
            return;
        }

        $this->produtos[$index]['nome'] = $nome;
        $this->produtos[$index]['preco'] = $preco;
        echo "Produto $id alterado com sucesso!!\n";
    }

    public function excluirProduto($id){
        $index = $this->buscarProdutoPorID($id);

        if($index === -1){
            echo "Produto com não encontrado!!\n";
            return;
        }

        unset($this->produtos[$index]);
        $this->produtos = array_values($this->produtos);
        echo "Produto excluido com sucesso!!\n";
    }

    public function listarProdutos(){

        if(empty($this->produtos)){
            echo "Erro, não existem produtos!!\n";
        }


        echo "Lista de produtos: " ."</br>";
        foreach($this->produtos as $produtos){
            echo "ID: " .$produtos["id"]. " Nome: " .$produtos["nome"]. " Preço R$: " .$produtos["preco"];
        }
    }



    private function buscarProdutoPorID($id){
        foreach($this->produtos as $index=>$produto){
            if($produto['id'] == $id){
                return $index;
            }
            return -1;
        }
    }

    private function produtoExiste($id){
    foreach($this->produtos as $produto){
        if($produto['id'] == $id){
            return true;
        }
        return false;
        }
    }   
}


