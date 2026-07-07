<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="card shadow-sm border-0 rounded-4">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label fw-semibold">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>                
            </div>

            <!--Imagem -->
            <div class="mb-3">
                <label for="imagem" class="form-label fw-semibold">Imagem</label>
                <input type="file" id="imagem" name="imagem" class="form-control" accept="image/*">
            </div>

            <button type="submit" name="enviar" value="enviar" class="btn btn-primary px-4">
                <i class="bi bi-upload"></i> Enviar
            </button>
        </form>
    </div>
</body>
<?php

    if(isset($_POST['nome'])){
        $erro = validarImagem();
    }

    function validarImagem(){

        if(empty($_FILES['imagem']['name'])){
            return "Imagem obrigatoria";
        }

        if ($_FILES['imagem']['error'] !== UPLOAD_ERR_OK){
            return "Erro tente mais tarde!";
        } 

        $tipoDeArquivoMime = mime_content_type($_FILES['imagem']['tmp_name']);

        if(strpos($tipoDeArquivoMime, "image/") == false){
            return "Anexe apenas imagens";
        }

        
    }

?>
</html>
 