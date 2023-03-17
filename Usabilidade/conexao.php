<?php
/**

LEMBREM-SE DE ALTERAR OS DADOS DA CONEXÃO
DADOS UTILIZADOS EM SALA DE AULA

$conexao = mysqli_connect('localhost', 'root', '', 'fpb');

 **/


$conexao = mysqli_connect('localhost', 'root', '', 'fpb', '3306');
if (!$conexao) {
    die('Não foi possível conectar');
}

?>
