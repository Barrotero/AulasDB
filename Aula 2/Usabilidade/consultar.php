<?php
session_start();
include('conexao.php');

$matricula = $_SESSION['matricula'];

$select = "SELECT nome, login.matricula, cpf, funcao FROM cadastro
           INNER JOIN login ON cadastro.matricula = login.matricula";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);

for($i=0; $i<count($dado); $i++) {
    for($j=0; $j<count($dado[1]); $j++) {
        echo $dado[$i][$j]." ";
    }
    echo "<br>";
}

?>