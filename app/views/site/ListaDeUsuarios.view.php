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
          <span class="material-icons-sharp btn" data-modal="modalAdd">add</span>
        <li><a href="#"><input type="text" placeholder="Pesquisar"></a></li>
      </ul>
  </div>
    
  <div class="table-container">
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
          <?php foreach ($users as $user): ?>
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
          <?php endforeach;?>
        </tbody>
      </table>
    
  </div>
  </div>

    <div id="fade" class="hide"></div>
    <div class="form-add" id="modalAdd">
          <form class='register' action='ListaDeUsuarios/criar' method='POST'>
              <div class='form-container' >
                <span class="material-icons-sharp close">close</span>
                <span class=form-title><b>Cadastrar</b></span>
                <p><input type='text' required class='form-name' name='name' placeholder="Nome"></p>
                <p><input type='text' required class='form-email' name='email' placeholder="E-mail"></p>
                <p><input type='text' required class='form-phone' name='phone' placeholder="Telefone"></p>
                <p><input type='password' required class='form-senha' name='password' placeholder="Senha"></p>
                <button class="cfn-btn">POSTAR</button>
              </div>
          </form>
      </div>

<div class="form form-delet">
    <form class="delet">
        <div class='form-container'>
        <span class=form-title> DELETAR </span>
            <span class="material-icons-sharp close">close</span>
        <input type="button" class='confirm-delet' name='deletar'>
        <input type="button" class='cancel-delet' name='cancelar'>
    </form>
</div>
</div>

<div class='form-edit' id="modalEdit">
  <form class='edit' action="ListaDeUsuarios/atualizar" method="POST">
    <div class='form-container' >
      <span class="material-icons-sharp close">close</span>
      <span class=form-title>Editar</span>
      <input type='text' required class='form-name' name='name' placeholder="Nome">
      <input type='text' required class='form-email' name='email' placeholder="E-mail">
      <input type='text' required class='form-phone' name='phone' placeholder="Telefone">
    <button id="confirm-btn" class="cfn-btn">SALVAR</button>
  </form>
</div>
       </form>
      </div> 
    </div>
    </div>
</div>


    <?php include __DIR__ .'/../includes/footer.php' ?>
    
    <script src="../../../public/js/UserAdd.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>