<?php
// Conectar ao banco de dados SQL Server de origem
$pdo1 = new PDO('mysql:host=localhost;dbname=fpb', 'root', '');

// Conectar ao banco de dados PostgreSQL de destino
$pdo2 = new PDO('pgsql:host=alunosfpb.postgresql.dbaas.com.br;dbname=alunosfpb;port=5432', 'alunosfpb', 'Alunos@2023');

// Executar uma consulta no banco de dados SQL Server de origem
$result = $pdo1->query("SELECT * FROM cadastro");

// Loop pelos resultados e inserir no banco de dados PostgreSQL de destino
foreach ($result as $row) {
    $coluna1 = $row['matricula'];
    $coluna2 = $row['nome'];
    $coluna3 = $row['cpf'];
    $coluna4 = $row['funcao'];

    $stmt = $pdo2->prepare("INSERT INTO cadastro (matricula, nome, cpf, funcao) VALUES (?, ?, ?, ?)");
    $stmt->execute([$coluna1, $coluna2, $coluna3, $coluna4]);
}

// Fechar as conexões com os bancos de dados
$pdo1 = null;
$pdo2 = null;
?>
