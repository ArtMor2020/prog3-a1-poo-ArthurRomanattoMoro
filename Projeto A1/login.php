<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>PROJETO A1 - Home</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="processa_login.php">
        <label>E-mail</label><br>
        <input type="email" name="email" value="<?php echo $_COOKIE['userEmail'] ?? ''; ?>" required><br>


        <label>Senha</label><br>
        <input type="password" name="password" required><br>

        <label>Lembrar E-mail:  </label>
        <input type="checkbox" name="rememberEmail" value="1" <?= isset($_COOKIE['userEmail']) ? 'checked' : '' ?>>
        <br><br>

        <button type="submit">Acessar</button>
    </form>
    <br>
    Não possui uma conta? <a href="cadastro.php">Crie uma aqui!</a>
    <br><br>
    <a href="index.php">Voltar</a>
</body>
