<?php 
session_start();
include('conexao.php');

$matricula = $_SESSION['matricula'];

$select =  "SELECT nome FROM cadastro 
			WHERE matricula = '$matricula'";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Principal</title>
</head>
<body>
	<center>
	<h1>Bem vindo, <?php echo $dado[0]; ?>!!</h1>
	<nav>
		<a href="consultar.php">Consultar Usuário</a><br>
		<a href="cadastrar.php">Cadastrar Usuário</a><br>
		<a href="alterar_senha.php">Alterar Senha</a><br>
		<a href="index.php">Sair</a>
	</nav>
	</center>
</body>
</html>