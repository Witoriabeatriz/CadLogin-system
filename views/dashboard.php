<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Corporativo</title>
    <link rel="stylesheet" type='text/css' media='screen' href="styles.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5em;
            color: #004080;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #666;
        }

        .btn {
            display: inline-block;
            background-color: #004080;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #003060;
        }

        a {
            color: #004080;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .admin {
            background-color: #e0f7fa;
        }

        .gestor {
            background-color: #e8f5e9;
        }

        .colaborador {
            background-color: #f9fbe7;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 20px;
            }

            h1 {
                font-size: 2em;
            }

            p {
                font-size: 1em;
            }

            .btn {
                font-size: 0.9em;
            }
        }
    </style>
</head>

<body class="<?= $_SESSION['perfil'] ?>">
    <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo,
            <?= $_SESSION['perfil'] ?>
        </h1>
        <p>Esta é a visão do perfil
            <?= $_SESSION['perfil'] ?>
        </p>

        <?php if ($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif ($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>
        <br><br>
        <!-- Link para logout -->
        <a href="index.php?actionlogout" class="btn">Logout</a>
    </div>
</body>

</html>