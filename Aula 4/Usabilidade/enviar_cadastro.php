<?php
// Conectar ao banco de dados SQL Server de origem
$conexao = mysqli_connect('localhost', 'root', '', 'fpb');

// Conectar ao banco de dados PostgreSQL de destino
$conexao2 = pg_connect("host=alunosfpb.postgresql.dbaas.com.br dbname=alunosfpb port=5432 user=alunosfpb password=Alunos@2023");

// Executar uma consulta no banco de dados SQL Server de origem
$result = $conexao->query("SELECT * FROM cadastro");

// Loop pelos resultados e inserir no banco de dados PostgreSQL de destino
foreach ($result as $row) {
    $coluna1 = $row['matricula'];
    $coluna2 = $row['nome'];
    $coluna3 = $row['cpf'];
    $coluna4 = $row['funcao'];
    $conexao2->exec("INSERT INTO cadastro (matricula, nome, cpf, funcao) VALUES ('$matricula', '$nome', '$cpf', $funcao");
}

// Fechar as conexões com os bancos de dados
$conexao = null;
$conexao2 = null;
?>