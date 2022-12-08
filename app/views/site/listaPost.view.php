<?php

use app\Controllers\testeController;
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" href="../../../public/css/stylesListPost.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de post</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/navbar.php' ?>

    <div class="search-box">
        <input type="text" class="search-txt" list="pesquisa-salva" placeholder="Pesquisar">
        <a href="#" class="search-btn">
            <img src="../../../public/assets/loupe.png" alt="lupa do pesquisar" height="20" width="20">

        </a>


    </div>
    <div class="salva">
        <datalist id="pesquisa-salva">

            <option value="Cinema"></option>
            <option value="Teatro"></option>
            <option value="Restaurante"></option>
            <option value="Ponto turistico"></option>
            <option value="Praia"></option>

        </datalist>

    </div>

    <div class="logo">

        <img src="../../../public/assets/logo3-sem-fundo.png" alt="logo" height="20" width="20">


    </div>

    <div class="linkesteste">

        <?php foreach ($posts as $post) : ?>

            <!-- link pagina-visializaçao unica -->
            <a href='#'>
                <div class="primeira">
                    <img src="../public/assets/<?= $post->imagem ?>" alt="<?= $post->tituloDopost ?>">
                </div>
            </a>

        <?php endforeach; ?>
        <div class="modifica">
            <?php require './app/views/includes/pagination.php' ?>
        </div>
    
    </div>


    <?php include __DIR__ . '/../includes/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>