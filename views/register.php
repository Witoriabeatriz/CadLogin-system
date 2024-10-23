<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

div {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    border: 1px solid #dcdfe3;
}

h2 {
    color: #2c3e50;
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
    font-weight: 600;
}

label {
    font-weight: 500;
    display: block;
    color: #34495e;
    font-size: 14px;
    margin-top: 15px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: calc(100% - 20px); /* Ajusta para o tamanho total */
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccd1d9;
    border-radius: 4px;
    box-sizing: border-box; /* Garante que o padding não afete a largura total */
    font-size: 14px;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
select:focus {
    border-color: #2980b9;
    outline: none;
}

button {
    background-color: #2980b9;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    font-weight: 600;
    margin-top: 15px;
}

button:hover {
    background-color: #1e5f8a;
}

a {
    display: block;
    text-align: center;
    margin-top: 15px;
    color: #2980b9;
    text-decoration: none;
    font-weight: 500;
}

a:hover {
    text-decoration: underline;
}


</style>
<body>
    <div>
        <h2>Cadastro de usuario</h2>
        <form method="post" action="index.php?action=register">
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" riquired>

            <label for="">Email</label>
            <input type="email" name="email" id="email" riquired>
 
            <label for="">Senha</label>
            <input type="password" name="senha" id="senha" riquired>
 
            <label for="">Perfil</label>
            <select name="perfil" id="perfil">
            <option value="admin">admin</option>
            <option value="gestor">gestor</option>
            <option value="colaboradr">colaborador</option>
        </select>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao login</a>
    </div>
</body>
</html>