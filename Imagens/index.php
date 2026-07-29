<?php

session_start();

require_once __DIR__ .'/Imagens/Classes/Conexao.php';
require_once __DIR__ .'/Imagens/Classes/Imagem.php';
require_once __DIR__ .'/Imagens/Classes/Pessoas.php';

$pdo = Conexao::conectarBanco();

$pessoa_obj = new Pessoa($pdo);
$imagem_obj = new Imagem($pdo);

$pessoas = $pessoa_obj->listarPessoas();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Upload múltiplo de imagens</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <div class="hero">
        <span class="badge">PHP + PDO + Upload Múltiplo</span>
        <h1>Galeria de Pessoas</h1>
        <p class="subtitle">
            Cadastre pessoas, envie múltiplas imagens e gerencie a galeria com PHP moderno e orientação a objetos.
        </p>
    </div>

    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="form-card">
        <h2>Cadastrar nova pessoa</h2>

        <input type="hidden" name="acao" value="nova_pessoa">

        <label>Nome</label>
        <input type="text" name="nome" required>

        <label>E-mail</label>
        <input type="email" name="email">

        <label>Imagens</label>
        <input type="file" name="imagens[]" multiple accept="image/jpeg,image/png,image/webp" required>

        <button type="submit">Salvar pessoa com imagens</button>
    </form>

    <form action="salvar.php" method="POST" enctype="multipart/form-data" class="form-card">
        <h2>Adicionar imagens a uma pessoa existente</h2>

        <input type="hidden" name="acao" value="pessoa_existente">

        <label>Pessoa</label>
        <select name="pessoa_id" required>
            <option value="">Selecione uma pessoa</option>
            <?php
            foreach($pessoas as $pessoa){
                ?>
                <option value="<?=  $pessoa['id'] ?>"><?= htmlspecialchars($pessoa['nome'])?>></option>
                <?php
            }
            ?>
        </select>

        <label>Novas imagens</label>
        <input type="file" name="imagens[]" multiple accept="image/jpeg,image/png,image/webp" required>

        <button type="submit">Adicionar imagens</button>
    </form>

    <h2>Pessoas cadastradas</h2>

    <div class="pessoa-card">
        <?php
            foreach($pessoas as $pessoa){
                $lista_imagens = $imagem_obj->listarPorPessoa($pessoa['id']);
                ?>
                <h3><?= htmlspecialchars($pessoa['nome']) ?></h3>
                <p><?= htmlspecialchars($pessoa['email']) ?></p>
                <?php
            }
                ?>
        <div class="galeria">
            <?php
                foreach($lista_imagens as $img){
                    ?>
                    <div class="imagem-card">
                        <img src="<?= $img['caminho']?>" alt="">
                        <a 
                            href="excluir-imagem.php?id=<?= $img['id']?>"
                            onclick="return confirm('Deseja excluir esta imagem?')"
                        >
                            Excluir
                        </a>
                    </div>
                    <?php
                }
            ?>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

if(isset($_SESSION['mensagem'])){
    $mensagem = $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
    ?>
    <script>
        Swal.fire({
            icon: '<?php htmlspecialchars($mensagem['tipo'])?>',
            title: '<?php htmlspecialchars($mensagem['titulo'])?>',
            text: '<?php htmlspecialchars($mensagem['texto'])?>',
            confirmButtonText: 'OK'
        });
    </script>
    <?php
}
 ?>

</body>
</html>
</body>
</html>