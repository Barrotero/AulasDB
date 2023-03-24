<?php
include('conexao.php');

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (matricula, login, senha)
            VALUES ('$matricula', '$login', '$senha')";
$query = mysqli_query($conexao, $insert);

header('Location: principal.php');

?>