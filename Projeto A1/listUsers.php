<?php

// Arquivo de DEBUG
// Lista e apaga todos os usuarios registrados

header('Location: index.php'); // comentar essa linha quando abilitar esse arquivo

/* Apagar esse comentario para abilitar

require_once 'classes/User.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Session.php';

Session::start();

// Função para limpar o arquivo users.json
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear'])) {
    file_put_contents('data/users.json', json_encode([]));
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

$usuarios = Authenticate::getAllUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DEBUG - Lista de Usuários</title>
</head>
<body>
    <h2>Usuários Registrados</h2>

    <form method="post" onsubmit="return confirm('Tem certeza que deseja apagar todos os usuários?');">
        <button type="submit" name="clear">🧹 Apagar todos os usuários</button>
    </form>
    <br>

    <?php if (empty($usuarios)): ?>
        <p>Nenhum usuário registrado ainda.</p>
    <?php else: ?>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha (hash)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= htmlspecialchars($usuario->getName()) ?></td>
                        <td><?= htmlspecialchars($usuario->getEmail()) ?></td>
                        <td><?= htmlspecialchars($usuario->getPassword()) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <br>
    <a href="index.php">Voltar à tela inicial</a>
</body>
</html>

*/
?>