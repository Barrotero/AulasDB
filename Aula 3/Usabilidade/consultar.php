<?php
session_start();
include('conexao.php');
include('valida_usuario.php');

$matricula = $_SESSION['matricula'];

$select = "SELECT nome, cadastro.matricula FROM cadastro
           INNER JOIN login ON cadastro.matricula = login.matricula";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_all($query);
/*
for($i=0; $i<count($dado); $i++) {
    for($j=0; $j<count($dado[1]); $j++) {
        echo $dado[$i][$j]." ";
    }
    echo "<br>";
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Consulta de Usuários</h1>
        <h3>Nome</h3>
        
<?php

for($i=0; $i<count($dado); $i++) { ?>
    <a href="usuario.php?matricula=<?php echo $dado[$i][1]; ?>">
        <?php echo $dado[$i][0]; ?>
    </a>
    <?php
    echo "<br>";
}

?> <br>
<a href="principal.php">Voltar</a>
    </center>
</body>
</html>