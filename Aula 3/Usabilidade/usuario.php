<?php

include('conexao.php');
include('valida_usuario.php');

$matricula = $_GET['matricula'];

$select = "SELECT nome, matricula, cpf, descricao FROM cadastro
            INNER JOIN funcao ON funcao = id_funcao
            WHERE matricula = '$matricula'";
$query = mysqli_query($conexao, $select);
$dado = mysqli_fetch_row($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        <h1><?php echo $dado[0]; ?></h1>
        <b>Matrícula: </b>
        <?php echo $dado[1]; ?><br>
        <b>CPF: </b>
        <?php echo $dado[2]; ?><br>
        <b>Função: </b>
        <?php echo $dado[3]; ?><br>
        <a href="apagar_usuario.php?matricula=<?php echo $matricula; ?>">Apagar</a>
    
    </center>
</body>
</html>

