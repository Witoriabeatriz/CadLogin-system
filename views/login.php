<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style><?php include "style.css" ?></style>
</head>
<body>
    <main>
        <h2>Faça seu Login</h2>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </section>
            <section>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>
            </section>
            <button type="submit" id="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>
</body>
</html>
