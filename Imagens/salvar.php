<?php

session_start();
require_once __DIR__ .'/Imagens/Classes/Conexao.php';
require_once __DIR__ .'/Imagens/Classes/Imagem.php';
require_once __DIR__ .'/Imagens/Classes/Pessoas.php';

try {
    $pdo = Conexao::conectarBanco();

    $pdo->beginTransaction();

    $pessoa_obj = new Pessoa($pdo);
    $imagem_obj = new Imagem($pdo);

    $acao = $_POST['acao'] ?? '';

    if($acao == 'nova_pessoa'){
        $nome = htmlspecialchars($_POST['nome'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');

        if(empty($nome)){
            throw new Exception("Error!! O nome de usuario é obrigatorio!!");
        }

        if(empty($_FILES['imagens']['nome'][0])){
            throw new Exception('Selecione pelo menos uma imagem!!');
        }

        $pessoa_id = $pessoa_obj->inserir($nome, $email);

        if(empty($pessoa_id)){
            throw new Exception('Falha no cadastro tente novamente mais tarde!!');
        }

        $imagem_obj->salvar_multiplas($pessoa_id, $_FILES['imagens']);

        $_SESSION['mensagem'] = [
            'tipo'=> 'sucess',
            'titulo' => 'Sucesso!',
            'texto' => 'Pessoa Cadastrada com Sucesso!'
        ];

    }elseif($acao == 'pessoa_existente'){
        $pessoa_id = filter_input(INPUT_POST, 'pessoa_id', FILTER_VALIDATE_INT);
        
        if(empty($pessoa_id)){
            throw new Exception('Falha no cadastro tente novamente mais tarde!!');
        }

        if(empty($_FILES['imagens']['nome'][0])){
            throw new Exception('Selecione pelo menos uma imagem!!');
        }

        $imagem_obj->salvar_multiplas($pessoa_id, $_FILES['imagens']);

        $_SESSION['mensagem'] = [
            'tipo'=> 'sucess',
            'titulo' => 'Sucesso!',
            'texto' => 'Imagens adicionadas com sucesso!'
        ];
    }

    $pdo->commit();

} catch (Exception $e) {
    if(isset($pdo) && $pdo->inTransaction()){
        $pdo->rollBack();
    }
    
    $_SESSION['mensagem'] = [
        'tipo'=> 'erro',
        'titulo' => 'Erro!',
        'texto' => $e->getMessage()
    ];
}

header('Location: index.php');
exit();