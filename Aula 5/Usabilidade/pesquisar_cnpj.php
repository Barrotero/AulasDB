<?php

session_start();

include('valida_usuario.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Pesquisar CNPJ</h1>
		<form id="pesquisar_cnpj" action="autenticar_cnpj.php" method="POST">
			CNPJ: <input type="text" name="pesquisar_cnpj">
			<input type="submit" name="pesquisar" value="Pesquisar">
		</form><br>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>