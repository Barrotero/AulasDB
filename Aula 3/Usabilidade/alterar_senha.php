<?php
include('valida_usuario.php');
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
    <form id="alterar_senha" action="nova_senha.php" method="POST">
        Nova Senha: <input type="password" name="nova_senha">
        <input type="submit" name="enviar" value="Trocar Senha">
    </form>
</center>
</body>
</html>