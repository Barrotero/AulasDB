<?php
session_start();

include('conexao.php');
include('valida_usuario.php');

$select =  "SELECT * FROM cadastro";

$query = pg_exec($conexao2, $select);
$dado = pg_fetch_row($query);

?>