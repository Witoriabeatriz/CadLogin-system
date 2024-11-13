<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style><?php include "style.css" ?></style>
</head>
<body class="<?= $_SESSION["perfil"]; ?>"> <!-- Define a classe com base no perfil -->
    <main>
        <div class="container">
            <h1>Bem-vindo, <?= $_SESSION["perfil"]; ?>!</h1>
            <p>Esta é a visão do perfil <?= $_SESSION["perfil"]; ?>.</p>
            <br>
            <?php if ($_SESSION["perfil"] == "admin"): ?>
                <!-- Admin pode gerenciar usuários (editar e excluir) -->
                <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
            
            <?php elseif ($_SESSION["perfil"] == "gestor"): ?>
                <!-- Gestor pode gerenciar usuários (apenas editar) -->
                <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
                <p>Área exclusiva do Gestor.</p>
            
            <?php else: ?>
                <p>Área exclusiva do Colaborador.</p>
            <?php endif; ?>
            <br><br><br>
            <!-- Link para logout -->
            <a href="index.php?action=logout">Logout</a>
        </div>
    </main>
</body>
</html>
