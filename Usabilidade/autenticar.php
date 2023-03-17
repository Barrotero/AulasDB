<?php

include('conexao.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT matricrula, login, senha FROM
			WHERE login = '$login' AND senha = '$senha'";
$query = mysqli_execute_query($conexao, $select);
$dado = mysqli_fetch_row($query)

if ($login == $dado[1] && $senha == $dado[2]) {
	header ("location: principal.php");
}
else {
	header ("location: index.php");
}

?>