<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

main {
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

form section {
    margin-bottom: 15px;
}

label {
    font-weight: 500;
    display: block;
    color: #34495e;
    font-size: 14px;
}

input[type="email"],
input[type="password"],
input[type="text"],
select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccd1d9;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

input[type="email"]:focus,
input[type="password"]:focus,
input[type="text"]:focus,
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
    margin-top: 10px;
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
    <main>
        <form action="index.php?action=login" method="post">
            <section>
            <label for="email">Email</label>
        <input type="email" name="email"placeholer="email" requerid>
            </section>
            <section>
                <label for="">Senha</label>
                <input type="password" name="senha"placeholer="Senha" required>
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastra-se</a>
    </main>
</body>
</html>