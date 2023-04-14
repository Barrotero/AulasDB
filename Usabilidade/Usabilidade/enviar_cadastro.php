<?php
// Conectar ao banco de dados SQL Server
$pdo1 = new PDO('mysql:host=localhost;dbname=fpb', 'root', '');

// Conectar ao banco de dados PostgreSQL
$pdo2 = new PDO('pgsql:host=alunosfpb.postgresql.dbaas.com.br;dbname=alunosfpb;port=5432', 'alunosfpb', 'Alunos@2023');

// Executar uma consulta no banco de dados SQL
$result = $pdo1->query("SELECT * FROM cadastro");

// Loop pelos resultados, inserir e verificar inclusão de dados no banco de dados PostgreSQL
foreach ($result as $row) {
    $coluna1 = $row['matricula'];
    $coluna2 = $row['nome'];
    $coluna3 = $row['cpf'];
    $coluna4 = $row['funcao'];
    $coluna5 = $row['unidade'];

    $stmt = $pdo2->prepare("INSERT INTO cadastro (matricula, nome, cpf, funcao, unidade) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$coluna1, $coluna2, $coluna3, $coluna4, $coluna5]);

    $verificar_cadastro = $stmt->rowCount();
    if ($verificar_cadastro > 0) {
        echo "Dados inseridos com sucesso no banco de dados PostgreSQL";
        } else {
        echo "Falha ao inserir os dados no banco de dados";
    }   
}

$pdo1 = null;
$pdo2 = null;
?>
