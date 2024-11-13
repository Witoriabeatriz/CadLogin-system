<?php

session_start();
if (isset($_SESSION["perfil"])):

?>

<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style><?php include "style.css" ?></style>
</head>
<body class="<?= $_SESSION['perfil'] ?>"> <!-- Define a classe com base no perfil do usuário -->
    <main>
        <h2>Lista de Usuários<br><br></h2>
        <table class="users">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user["id"] ?></td>
                    <td><?= $user["nome"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["perfil"] ?></td>
                    <td>
                        <?php if ($_SESSION["perfil"] == "admin" || $_SESSION["perfil"] == "gestor"): ?>
                            <a href="index.php?action=edit&id=<?= $user["id"] ?>" class="edit">Editar</a>
                        <?php endif; ?>
                        <?php if ($_SESSION["perfil"] == "admin"): ?>
                            <a href="index.php?action=delete&id=<?= $user["id"] ?>" class="delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p align="center"><br><br><a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a></p>
    </main>
</body>
</html>

<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
<?php endif; ?>
