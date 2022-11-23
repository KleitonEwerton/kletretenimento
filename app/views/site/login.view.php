<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../../public/css/styleslogin.css">
		<title>Login</title>
	</head>
	
	<body>
	<?php include __DIR__ .'/../includes/navbar.php' ?>
  	
		<section class="area-login"> 
			<div class="login"> 
				<div>
					<img src="../../../public/assets/logo2-sem-fundo.png">
				</div>

				<form method="POST">
					<input type="text" name="nome" placeholder="Usuário" autofocus>
					<input type="text" name="senha" placeholder="Senha">
					<input type="submit" value="entrar">
				</form>
				<p>Não possui uma conta?<a href="#">Criar conta</a></p>
			</div>
		</section>
  		<?php include __DIR__ .'/../includes/footer.php' ?>
	</body>

</html>
