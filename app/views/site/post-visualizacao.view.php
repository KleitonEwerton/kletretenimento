<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <link rel="stylesheet" href="../../../public/css/styles-postvisu.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <?php include __DIR__ . '/../includes/navbar.php' ?>
    <div class="container">
        <div class="title">
            <div class="logo">
                <h2>KL<span>ENTRETENIMENTO</span></h2>
            </div>
        </div>



        <div class="content">
            

                <h1><?= $post->tituloDopost ?></h1>
                <img src="../../../public/assets/<?= $post->imagem ?>">
                <figcaption><?= $post->tituloDopost ?></figcaption>

                <p><?= $post->textoPost ?></p>

                
        </div>

        <?php include __DIR__ . '/../includes/footer.php' ?>
    </div>


</body>

</html>