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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        main {
            width: 80%;
            max-width: 800px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Estilização da tabela */
        .users {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .users th, .users td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .users th {
            background-color: #e75e8d;
            color: #fff;
        }

        .users tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .users tr:hover {
            background-color: #f1f1f1;
        }

        /* Estilização dos botões */
        .btn, .edit, .delete {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
            font-size: 0.9em;
        }

        .btn {
            background-color: #5cb85c;
            display: inline-block;
            text-align: center;
            margin-top: 20px;
        }

        .edit {
            background-color: #337ab7;
        }

        .delete {
            background-color: #d9534f;
        }

        .delete:hover {
            background-color: #c9302c;
        }

        .edit:hover {
            background-color: #286090;
        }
        
        .btn:hover {
            background-color: #4cae4c;
        }

        /* Responsividade */
        @media (max-width: 600px) {
            .users th, .users td {
                font-size: 0.9em;
                padding: 8px;
            }
        }
    </style>
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
                            <form method="post" action="index.php?action=delete&id=<?= $user["id"] ?>" style="display:inline;">
                                <button style="border: none" type="submit" class="delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                            </form>
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
