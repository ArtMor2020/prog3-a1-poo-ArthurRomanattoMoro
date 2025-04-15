<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>PROJETO A1 - Cadastro</title>
</head>
<body>
    <h2>Dados do Cadastro</h2>
    <form method="post" action="processa_cadastro.php">
        <label>Nome:</label><br>
        <input type="text" name="name" required><br>
        
        <label>E-mail</label><br>
        <input type="email" name="email" required><br>

        <label>Senha</label><br>
        <input type="text" name="password" required><br><br>

        <button type="submit">Acessar</button>
    </form>
    <br>
    <a href="index.php">Voltar a tela inicial.</a>
</body>
