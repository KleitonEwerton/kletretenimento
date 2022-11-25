<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/styles-editusuario.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp">
    <script src="../../../public/js/modalEU.js"  defer ></script>
    <title>Admin</title>
</head>
<body class="body">
  <?php include __DIR__ .'/../includes/navbar.php' ?>
  

  <div class="lista-posts">
    <img class="logo"  src="../../../public/assets/logo.png">
    <h1>EDITAR USUÁRIOS</h1>
    <div class="serch-bar">
      <ul class="serch-itens">
        <li><a href="#"><i class="bi bi-plus btn" id="add-btn" data-modal="modalAdd"></i></a></li>
        <li><a href="#"><input type="text" placeholder="Pesquisar"></a></li>
      </ul>
  </div>
    
  <div class="table-container">
    <?php foreach ($users as $user): ?>
      <table class="table table-dark table-hover tabela">
        <thead>
          <tr>
            <th scope="col">Usuários</th>
            <th scope="col">Nomes</th>
            <th scope="col">Email</th>
            <th scope="col">Opções</th>
          </tr>
        </thead>
        <tbody>
          <tr class ="table-itens">
            <th scope="row"><?= $user->id ?></th>
            <buttom></buttom>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td class="icons">
              <a href="#"><i class="bi bi-pencil-square btn" id="edit" data-modal="modalEdit"></i></a>
              <a href="#"><i class="bi bi-trash-fill btn"></i></a>
            </td>
          </tr>
          <div class='form form-add'>
              <form class='register' action='ListaDeUsuarios/criar' method='POST'>
                  <div class='form-container'>
                      <span class="material-icons-sharp close">close</span>
                      <span class=form-title><b>Cadastrar</b></span>
                      <p><input type='text' required class='form-name' name='name' placeholder="Nome"></p>
                      <p><input type='text' required class='form-email' name='email' placeholder="E-mail"></p>
                      <p><input type='text' required class='form-phone' name='phone' placeholder="Telefone"></p>
                      <p><input type='password' required class='form-senha' name='password' placeholder="Senha"></p>
                      <div>
                          <label>
                              <input type='checkbox' class='form-admin' name='admin'>
                              Administrador</label>
                      </div>
                      <input type='file' name="photo" class='form-icon'>
                      <span class="material-icons-sharp check">done</span>
                  </div>
              </form>
          </div>


          <tr>
            <th scope="row">2</th>
            <td>davisin</td>
            <td>davisin@gmail.com</td>
            <td class = "icons">
              <a href="#"><i class="bi bi-pencil-square btn" id="edit" data-modal="modalEdit"></i></a>
              <a href="#"><i class="bi bi-trash-fill btn"></i></a>
              
              
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>luquinhas</td>
            <td>luquinhas@gmail.com</td>
            <td class = "icons">
              <a href="#"><i class="bi bi-pencil-square btn" id ="edit" data-modal="modalEdit" ></i></a>
              <a href="#"><i class="bi bi-trash-fill btn"></i></a>
              
             
            </td>
          </tr>
        </tbody>
      </table>
    </table>
    <?php endforeach;?>
  </div>
  </div>

    <div id="fade" class="hide"></div>
    <div id="modalEdit" style="display: none;" class="hide">  
    <div class="form-container">
      <div class="modal-head">
        <h1 class="title">EDITAR USUÁRIO</h1>
      </div>
<<<<<<< HEAD
      <input type='file' name="photo" class='form-icon'>
      <span class="material-icons-sharp check">done</span>
    </div>
  </form>
</div>

<div class="form delet">
    <form class="delet">
        <span class=form-title> DELETAR </span>
        <input type="button" class='confirm-delet' name='deletar'>
        <input type="button" class='cancel-delet' name='cancelar        '>
    </form>
</div>

<div class='form form-edit'>
  <form class='edit'>
    <div class='form-container'>
      <span class="material-icons-sharp close">close</span>
      <span class=form-title>Editar</span>
      <input type='hidden' class='form-id' name='id'>
      <input type='text' required class='form-name' name='name' placeholder="Nome">
      <input type='text' required class='form-email' name='email' placeholder="E-mail">
      <input type='text' required class='form-phone' name='phone' placeholder="Telefone">
      <div>
        <label>
          <input type='checkbox' class='form-admin' name='admin'>
          Administrador</label>
      </div>
      <input type='file' name="photo" class='form-icon'>
      <span class="material-icons-sharp check">done</span>
    </div>
  </form>
</div>
=======
      <div class="modal-itens">
       <form class="add-form" action='ListaDeUsuarios/editar' method='POST'>
        <label for="Usuário">USUÁRIO.</label>
        <input type="text" id="Usuário" class="form-input">
      
        <label for="Titulo">E-MAIL.</label>
        <input type="text" id="Titulo" class="form-input">
        
        <label for="Titulo">SENHA.</label>
        <input type="password" id="Senha" class="form-input">
>>>>>>> d3b3f97c7b1b5b7e2575c504e4f6b4fe8d7197a0

        <button id="confirm-btn" class="cfn-btn">SALVAR</button>
       </form>
      </div> 
    </div>
    </div>



    <?php include __DIR__ .'/../includes/footer.php' ?>
    
    <script src="../../../public/js/UserAdd.js"></script>
    <script src="../../../public/js/apss.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>