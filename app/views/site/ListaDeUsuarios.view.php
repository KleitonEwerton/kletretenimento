<?php
 require app/Controllers/UserController;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciamento de Usuários</title>
  <link rel="stylesheet" href="../../../public/css/listaUsuarios.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp">

</head>

<body>
<?php include app\views\includes\navbar.php ?>
<?php include app\views\site\sidebar.php ?>

<div class='content'>
  <img class='logo' src="../../../public/assets/logo.png" alt="Logo">
  <table class='users'>
    <?php foreach($users as $users) : ?>
    <tr>
      <td class='table-id'>n°</td>
      <td class='table-icon'>Ícone</td>
      <td class='table-name'>Nome</td>
      <td class='table-email'>E-mail</td>
      <td class='table-phone'>Telefone</td>
      <td class='table-date'>Criado em</td>
      <td class='table-admin'>Admin</td>
      <td class='table-actions'>
        <span class="material-icons-sharp add">add</span>
      </td>
    </tr>
    <tr>
      <td class='table-icon'><?= $users -> id ?></td>
      <td class='table-icon'><img src='../../../public/assets/terror.png' alt='Ícone'></td>
      <td class='table-name'><?= $users -> name ?></td>
      <td class='table-email'><?= $users -> email ?></td>
      <td class='table-phone'><?= $users -> phone ?></td>
      <td class='table-date'><?= $users -> data_nascimento ?></td>
      <td class='table-actions'>
        <span class="material-icons-sharp edit-btn">edit</span>
        <span class="material-icons-sharp delete-btn">delete</span>
      </td>
    </tr>
    <? endforeach; ?>

  </table>
</div>
<?php include App\Views\Includes\footer.php ?>
<div class='form form-add'>
  <form class='register' action="ListaDeUsuarios" method="POST">
    <div class='form-container'>
      <span class="material-icons-sharp close">close</span>
      <span class=form-title>Cadastrar</span>
      <input type='text' required class='form-name' name='name' placeholder="Nome">
      <input type='text' required class='form-email' name='email' placeholder="E-mail">
      <input type='text' required class='form-phone' name='phone' placeholder="Telefone">
      <input type='password' required class='form-senha' name='password' placeholder="Senha">
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

</body>
<script src="../../../public/js/User.js"></script>
<script src="../../../public/js/UserController.js"></script>
<script src="../../../public/js/apps.js"></script>
</html>