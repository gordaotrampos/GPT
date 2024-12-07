<!-- Arquivo: public/login.html -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Usuário</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <img src="assets/images/logocxc-removebg-preview.png" alt="Logo Caixa" class="logo">
    </header>
    <main>
        <h1>Login do Usuário</h1>
        <form method="POST" action="../src/login_user.php">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </main>
    <footer>
        <p>Caixa Econômica Federal | Atendimento 24h</p>
    </footer>
</body>
</html>
