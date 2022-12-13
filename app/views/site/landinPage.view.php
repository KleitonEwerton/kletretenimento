<!DOCTYPE html>

<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intal-scala=1.0">
    <link rel="stylesheet" href="../../../public/css/stylesLandingPage.css">
    <title> kleTretenimento</title>



</head>



<body>
    <?php include __DIR__ . '/../includes/navbar.php' ?>

    <div class="itens-container">


        <div class="imagem1">

            <h2>
                <img src="../../../public/assets/logo3-sem-fundo.png" alt="imagen logo">
            </h2>

        </div>

        <div class="slider">
            <div class="slides">

                <input type="radio" name="radio-ntn" id="radio1">
                <input type="radio" name="radio-ntn" id="radio2">
                <input type="radio" name="radio-ntn" id="radio3">

                <?php
                $controle = 0;
                $classe = 'slide first';
                ?>

                <?php foreach ($posts as $post) :
                    if ($controle != 0) {
                        $classe = 'slide';
                    }
                    $controle++;
                ?>
                    <div class="<?= $classe ?>">
                        <a href='post-visualizacao?id=<?= $post->id ?>'><img src="../../../public/assets/<?= $post->imagem ?>" alt="<?= $post->tituloDopost ?>"></a>
                    </div>
                <?php endforeach; ?>

                <div class="navegation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>

                </div>

            </div>



            <div class="manual-navegation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>

        </div>
        <div class="QS-container" id="QuemSomos">
            <div class="titulo">
                <h4>Quem somos?</h4>
            </div>

            <div class="texto">
                <p>Somos um grupo de universitários da faculdade federal de Juiz de fora, criado com a finalidade de desenvolver um projeto, para o processo treine da empresa júnior code.
                <p>
            </div>


            <div class="titulo">
                <h5>O que fazemos?</h5>
            </div>

            <div class="texto">
                <p>Adiministramos e desenvolvemos esse blogue destinado a pessoas que procuram por algum programa para o fim de semana, damos esse espaço para que membros da comunidade possam anunciar eventos, festas ou qualquer outra categoria de evento que possa animar um pouco do seu dia, criamos essa página sem fins lucrativos, visando apenas ajudar as pessoas entediadas e sem planos para sair.
                <p>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/../includes/footer.php' ?>
    <script src="../../../public/js/ScriptLandingPage.js"></script>

</body>