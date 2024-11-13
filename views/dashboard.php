<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
     body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        main {
            width: 90%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            margin: 10px 0;
        }

        /* Botões de navegação */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #e75e8d;
            border: none;
            border-radius: 4px;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d65078;
        }

        /* Link de logout */
        a[href*="logout"] {
            display: block;
            margin-top: 20px;
            color: #337ab7;
            text-decoration: none;
            font-size: 0.9em;
        }

        a[href*="logout"]:hover {
            color: #286090;
        }
    </style>
</head>
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
