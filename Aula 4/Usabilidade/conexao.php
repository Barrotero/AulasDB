<?php
/**

LEMBREM-SE DE ALTERAR OS DADOS DA CONEXÃO
DADOS UTILIZADOS EM SALA DE AULA

$conexao = mysqli_connect('localhost', 'root', '', 'fpb');

 
$conexao = pgconnect('localhost', 'root', 'blink182', 'fpb', '5432');
if (!$conexao) {
    die('Não foi possível conectar');
}
**/

//LOCAL
$conexao = mysqli_connect('localhost', 'root', '', 'fpb');
if (!$conexao) {
    die('Não foi possível conectar');
};

$conexao2 = pg_connect("host=alunosfpb.postgresql.dbaas.com.br dbname=alunosfpb port=5432 user=alunosfpb password=Alunos@2023");
if (!$conexao) {
    die('Não foi possível conectar');
};

?>
