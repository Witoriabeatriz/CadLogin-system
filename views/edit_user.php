<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <style>
        /* Estilização global */
        body.edit-body {
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
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilização do formulário */
        .edit-form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 5px;
            color: #555;
            text-align: left;
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
            color: #333;
        }

        /* Estilização do botão de salvar */
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #e75e8d;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
            font-size: 1em;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #d65078;
        }

        /* Estilização do link para voltar à lista */
        .back-link {
            display: block;
            margin-top: 15px;
            color: #337ab7;
            text-decoration: none;
            font-size: 0.9em;
        }

        .back-link:hover {
            color: #286090;
        }
    </style>
</head>
</head>
<body class="edit-body">
    <main>
        <h2>Editar Usuário</h2>
        <form method="post" action="index.php?action=edit&id=<?= $user["id"] ?>" class="edit-form">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $user["nome"] ?>" required>
            <br /> 
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= $user["email"] ?>" required>
            <br />
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin" <?= $user["perfil"] == "admin" ? "selected" : "" ?>>Admin</option>
                <option value="gestor" <?= $user["perfil"] == "gestor" ? "selected" : "" ?>>Gestor</option>
                <option value="colaborador" <?= $user["perfil"] == "colaborador" ? "selected" : "" ?>>Colaborador</option>
            </select>
            <br />
            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </main>
</body>

</html>