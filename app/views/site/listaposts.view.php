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
     <div class="lista-posts">
        <img class="logo"  src="../../../public/assets/logo.png">
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
                  <th scope="col">Titulo</th>
                  <th scope="col">Data de postagem</th>
                  <th scope="col">Autor</th>
                  <th scope="col">Opções</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ((array) $posts as $post): ?>  
              <tr class="table-itens">
            
                <?php endforeach; ?>
              </tbody>
          </table>
        </div> 
    </div>



    <div class="hide fade-modal" id="fade"></div>
    <div class="struct-modal" id="modalAdd">
      <form method="post" action="listaposts/create">
      <div class=" form-container">
        <div class="modal-head">
          <h1 class="title">ADICIONAR POST</h1>
        </div>
      <div class="modal-itens">
       
        <form class="add-form">
       
          <label for="Usuário">USUÁRIO.</label>
          <input type="text" id="Usuário" class="form-input">
        
          <label for="Titulo">TITULO DO POST.</label>
          <input type="text" id="Titulo" class="form-input">
          
          <label for="input-image" class="img-selector">IMAGEM</label>
          <input id="input-image" class="img-btn" type="file" onchange="readURL(this)" accept="image/*">
          <br>
          <label for="post">ESCREVA O POST AQUI!</label>
          <textarea type="text" id="post" rows="8" cols="30" class="form-input"></textarea>

          <button id="confirm-btn" class="cfn-btn">POSTAR</button>
          
        </form>
        </form>
    </div> 
    
    </div>
      <form class="view-form" style="display: none;">
          <select>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        <button id="view-btn" href="#"></button>
      </form>
      </div>
      <form class="delete-form" style="display: none;">
          <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <button id="del-btn"></button>
          <div class="confirmation-container">
            <p>Tem certeza que deseja excluir o post? Tal ação não pode ser desfeita!</p>
            <button id="yes-btn" class="yes"></button>
            <button id="no-btn" class="no"></button>
          </div>
      </form>
      <form class="edit-form" style="display: none;">
          <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <button id="edit-btn"></button>
      </form>
    </div>

    <div class="hide fade-modal" id="fade"></div>
    <div class="struct-modal" id="modalEditar">
      <div class=" form-container">
        <div class="modal-head">
          <h1 class="title">EDITAR POST</h1>
          <form action="/listaposts/create" method="POST" form>
        </div>
        <div class="modal-itens">
         <form class="add-form" >
          <label for="Usuário">USUÁRIO.</label>
          <input type="text" id="Usuário" class="form-input" name='usuario'>
        
          <label for="Titulo">TITULO DO POST.</label>
          <input type="text" id="Titulo" class="form-input" name='titulo'>
          
          <label for="input-image" class="img-selector">IMAGEM</label>
          <input id="input-image" class="img-btn" type="file" onchange="readURL(this)" accept="image/*">
          <br>
          <label for="post">REESCREVA O POST AQUI!</label>
          <textarea type="text" id="post" rows="8" cols="30" class="form-input" name='post'></textarea>

          <button id="confirm-btn" class="cfn-btn">REPOSTAR</button>
         </form>
        </div> 
      </div>
      <form class="view-form" style="display: none;">
          <select>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
          </select>
        <button id="view-btn" href="#"></button>
      </form>
      </div>
      <form class="delete-form" style="display: none;">
          <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <button id="del-btn"></button>
          <div class="confirmation-container">
            <p>Tem certeza que deseja excluir o post? Tal ação não pode ser desfeita!</p>
            <button id="yes-btn" class="yes"></button>
            <button id="no-btn" class="no"></button>
          </div>
      </form>
      <form class="edit-form" style="display: none;">
          <select>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
          <button id="edit-btn"></button>
      </form>
    </div>

  <div class="modal-p hide" id ="modalAdicionar">
     <div class="modal-head">
       <h3>Titulo do Modal</h3>
     </div>
     <div class="modal_corpo" id ="modalAdicionar">


     </div>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>