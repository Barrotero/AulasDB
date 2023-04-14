<?php
session_start();

include('conexao.php');
include('valida_usuario.php');

$unidade = isset($_POST['unidade']) ? $_POST['unidade'] : '';
$select =  "SELECT matricula, nome, descricao FROM cadastro
            INNER JOIN funcao on funcao = id_funcao
            WHERE unidade = $unidade";
$query = pg_exec($conexao2, $select);

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
		<h1>Consulta de Usuários</h1>
        <h3>Nome</h3>
            <?php
                while($dado = pg_fetch_array($query)) {
                    echo $dado[0]." - ";
                    echo $dado[1]." - ";
                    echo $dado[2]."<br>";
                }
            ?>
		<br>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>