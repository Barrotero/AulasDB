<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>Consulta de Usuários</h1>
        <form id="pesquisar_unidade" action="ver_alunos_outras.php" method="POST">
            Informe o código da Unidade<br>
            <input type="number" name="unidade" required>
            <input type="submit" name="pesquisar" value="Pesquisar">
        </form><br>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>