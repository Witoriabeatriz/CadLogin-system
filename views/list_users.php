<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e0f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 2em;
            color: #01579b;
            margin-bottom: 20px;
            text-align: center;
        }

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1em;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .styled-table thead tr {
            background-color: #0277bd;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            text-align: left;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #b3e5fc;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #e1f5fe;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #0277bd;
        }

        .styled-table a {
            color: #0277bd;
            text-decoration: none;
            padding: 6px 12px;
            border: 1px solid #0277bd;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .styled-table a:hover {
            background-color: #0277bd;
            color: #fff;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #0277bd;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-size: 1em;
        }

        .btn:hover {
            background-color: #01579b;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 20px;
            }

            h2 {
                font-size: 1.5em;
            }

            .styled-table th,
            .styled-table td {
                padding: 8px 10px;
            }

            .btn {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body class="<?= isset($_SESSION['perfil']) ? $_SESSION['perfil'] : 'default'; ?>">
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
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
                    <td><?= $user["ID"] ?></td>
                    <td><?= $user["nome"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["perfil"] ?></td>
                    <td>
                        <?php if (isset($_SESSION["perfil"]) && ($_SESSION["perfil"] == "admin" || $_SESSION["perfil"] == "gestor")): ?>
                            <a href="editar.php?id=<?= $user['ID']; ?>">Editar</a>
                        <?php endif; ?>
                        <?php if (isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "admin"): ?>
                            <a href="excluir.php?id=<?= $user['ID']; ?>">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>

</html>
