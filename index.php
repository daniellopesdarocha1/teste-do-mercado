<?php  
	include("cabecalho.php"); 
	include ("logica-usuario.php");
?>

<?php if(isset($_GET["logout"]) && $_GET["logout"]==true) { ?>
	<p class="alert-success">Deslogado com sucesso!</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
	<p class="alert-danger">Usuário ou senha inválida</p>
<?php }?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true){ ?>
	<p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
<?php }?>

	<h1>Bem vindo!</h1>
	
	<?php if(usuarioEstaLogado()) { ?>

		<p class="text-success">
			Você está logado como <?=usuarioLogado()?>. 
			<a href="logout.php">Deslogar</a>
		</p>

	<?php } else { ?>

	<br>
	<p> "Sistema para cadastro de Produtos"</p>

	<h2>Login</h2>
	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>Email</td>
				<td><input class="form-control" type="email" name="email"/></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input class="form-control" type="password" name="senha" /></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Login</button></td>
			</tr>
		</table>
	</form>
<?php } ?>
<?php include("rodape.php") ?>