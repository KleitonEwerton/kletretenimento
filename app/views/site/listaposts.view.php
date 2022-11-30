<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../../../public/css/listaposts.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <script defer src="../../../public/js/modalLP.js"></script>
  <title>Document</title>
</head>

<body class="body">
  <?php include __DIR__ . '/../includes/navbar.php' ?>

  <div class="lista-posts">
    <img class="logo" src="../../../public/assets/logo.png">
    <h1>POSTS</h1>
    <div class="serch-bar">
      <ul class="serch-itens">
        <li><a href="#"><i class="bi bi-plus btn" id="add-btn" data-modal="modalAdd"></i></a></li>
        <li><a href="#"><input type="text" placeholder="Pesquisar"></a></li>
      </ul>
    </div>
    <div class="table-container">
      <table class="table table-hover table-dark tabela">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Usuario</th>
            <th scope="col">texto do Post</th>
            <th scope="col">Imagem</th>
            <th scope="col">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($posts as $post) : ?>
            <tr class="table-itens">
              <th scope="row"><?= $post->id ?></th>
              <th><?= $post->tituloDopost ?></th>
              <td><a><?= $post->usuario ?></a></td>
              <td><?= $post->textoPost ?></td>
              <td><?= $post->imagem ?></td>

              <td class="icons">
                <a href="#"><i class="bi bi-trash-fill btn" id="add-btn" aria-hidden="true" data-modal="modalDelete-<?=$post->id?>"></i></a>
                 
               
                <a href="#"><i class="bi bi-pencil-square btn modalclick" data-id= <?= $post->id ?> id="add-btn" name='id' data-modal="modalEditar"></i></a>

                <a href="#"><i class="bi bi-eye-fill btn" id="add-btn" aria-hidden="true" data-modal="modalView-<?=$post->id?>" ></i></a>
              </td>
            </tr>       
      
            <!-- Modal view -->
        <div class="hide fade-modal" id="fade"></div>
        <div class="struct-modal" id="modalView-<?=$post->id?>">
          <div class=" form-container">
            <div class="modal-head">
              <h1 class="title">POST</h1>
            </div>
            <div class="modal-itens">
              <div class="add-form">
                <label for="Usuário">USUÁRIO.</label>
                <p class=" form showusuario show"><?=$post->usuario?></p>
              
                <label for="Titulo">TITULO DO POST.</label>
                <p class=" form showtitiluDopost show"><?=$post->tituloDopost?></p>

                <label for="input-image" class="img-selector">IMAGEM</label>
                <!-- <input id="input-image" class="img-btn" type="file" onchange="readURL(this)" name='imagem' accept="image/*"> -->
                <br>
                <label for="post">TEXTO DO POST</label>
                <p class=" form showtextopost show"><?=$post->textoPost?></p>
                </div>
            </div>
          </div>
        </div>
  
        <!----MODAL EXCLUIR---->
        <div class="hide fade-modal" id="fade"></div>
        <div class="struct-modal" id="modalDelete-<?=$post->id?>">
        <div class=" form-container">
          <div class="modal-head">
        <h2 id="title">Apagar Post</h2>
        <p>Tem certeza que deseja excluir o post?</p>
          <div class="row d-flex justify-content-center">
          <form action="listaposts/deletar" method="POST">
          <input type="hidden" value="<?=$post->id?>" name="id">
          <button type="submit" class="cfn-btn" >Sim</button>
            <button type="button" class="cfn-btn">Cancelar</button>
            </form>
           </div>
           </div>
           </div>
           </div>
                <!---->
  <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
      <!-- Modal Adicionar -->
  <div class="hide fade-modal" id="fade"></div>
  <div class="struct-modal" id="modalAdd">
    <div class=" form-container">
      <div class="modal-head">
        <h1 class="title">ADICIONAR POST</h1>
      </div>
      <div class="modal-itens">
        <form class="add-form" action="listaposts/criar" method="POST">
          <label for="Usuário">USUÁRIO.</label>
          <input type="text" id="Usuário" name='usuario' class="form-input">

          <label for="Titulo">TITULO DO POST.</label>
          <input type="text" id="Titulo" name='tituloDopost' class="form-input">

          <label for="input-image" class="img-selector">IMAGEM</label>
          <input id="input-image" class="img-btn" type="file" onchange="readURL(this)" name='imagem' accept="image/*">
          <br>
          <label for="post">ESCREVA O POST AQUI!</label>
          <textarea type="text" id="post" rows="8" cols="30" name='textoPost' class="form-input"></textarea>

          <button id="confirm-btn" class="cfn-btn">POSTAR</button>
        </form>
      </div>
    </div>
  </div>
              <!-- Modal Editar -->
  <div class="hide fade-modal" id="fade"></div>
  <div class="struct-modal" id="modalEditar">
    <div class=" form-container">
      <div class="modal-head">
        <h1 class="title">EDITAR POST</h1>
      </div>
      <div class="modal-itens">
        <form class="add-form" action="listaposts/update" method="POST">
          <label for="Usuário">USUÁRIO.</label>
          <input type="text" id="Usuário" name='usuario' class="form-input">
          <input type="hidden" name='id' id='updateid'>    
           
          
          <label for="Titulo">TITULO DO POST.</label>
          <input type="text" id="Titulo" name='tituloDopost' class="form-input">

          <label for="input-image" class="img-selector">IMAGEM</label>
          <input id="input-image" class="img-btn" type="file" onchange="readURL(this)" name='imagem' accept="image/*">
          <br>
          <label for="post">REESCREVA O POST AQUI!</label>
          <textarea type="text" id="post" rows="8" cols="30" name='textoPost' class="form-input"></textarea>

          <button id="confirm-btn" class="cfn-btn">REPOSTAR</button>
        </form>
      </div>
    </div>
  </div>

  <div class="modal-p hide" id="modalAdicionar">
    <div class="modal-head">
      <h3>Titulo do Modal</h3>
    </div>
    <div class="modal_corpo" id="modalAdicionar">
    </div>


  </div>
  <?php include __DIR__ . '/../includes/footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script>
    $(function() {
      $(".modalclick").click(function() {
          //$(this).attr("data-id");
          $('#updateid').val($(this).attr("data-id")); 
          console.log( $('#updateid').val());
      });
    })
  </script>

</body>

</html>
