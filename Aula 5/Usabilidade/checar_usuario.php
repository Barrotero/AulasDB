<?php
function checarInsercao($pdo, $tabela, $id) {
    $stmt = $pdo->prepare("SELECT * FROM $tabela WHERE id = ?");
    $stmt->execute([$id]);
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        echo "Os dados foram inseridos com sucesso.";
    } else {
        echo "Ocorreu um erro ao inserir os dados.";
    }
}

// Exemplo de uso
$idInserido = 1; // supondo que o id inserido é 1
checarInsercao($PDO2, "cadastro", $idInserido);

?>