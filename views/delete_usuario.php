<?php
// Inclua a conexão PDO
require_once 'db_connect.php';

// Verifique se o ID do usuário foi fornecido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Deletar o usuário
    $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->execute([$id]);

    // Redireciona após a exclusão
    header("Location: listar_usuarios.php");
    exit;
} else {
    echo "ID de usuário não fornecido.";
    exit;
}
?>
