<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
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
        form {
            display: flex;
            flex-direction: column;
        }

        section {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
            color: #333;
        }

        /* Estilização do botão de envio */
        button#submit {
            width: 100%;
            padding: 10px;
            background-color: #e75e8d;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-weight: bold;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s;
        }

        button#submit:hover {
            background-color: #d65078;
        }

        /* Estilização do link de login */
        a {
            display: block;
            margin-top: 15px;
            color: #337ab7;
            text-decoration: none;
            font-size: 0.9em;
        }

        a:hover {
            color: #286090;
        }
    </style>
</head>
<body>
    <main>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <section>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required>
            </section>
            <section>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </section>
            <section>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </section>
            <section>
                <label for="perfil">Perfil:</label>
                <select name="perfil">
                    <option value="admin">Admin</option>
                    <option value="gestor">Gestor</option>
                    <option value="colaborador">Colaborador</option>
                </select>
            </section>
            <button type="submit" id="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
    </main>
</body>
</html>