<?php
require_once 'classes/User.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Session.php';

Session::start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION["user"];
$email = $_COOKIE["userEmail"] ?? 'Não lembrado.';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PROJETO A1 - Dashboard</title>
</head>
<body>
    <h2>Logado com sucesso!</h2><br>
    <h2>Bem-Vindo, <?= htmlspecialchars($user->getName()) ?></h2>
    <p>E-mail lembrado: <?= htmlspecialchars($email) ?></p>

    <a href="logout.php">Sair</a>
</body>
</html>
