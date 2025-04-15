<?php
require_once 'classes/User.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Session.php';

Session::start();

// Sanitização dos dados
$name = htmlspecialchars($_POST['name'] ?? '');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = $_POST['password'] ?? '';

// Cria um objeto usuario
$user = new User($name, $email, $password);

// Tenta registrar o usuario
$registerResult = Authenticate::register($user);

if ($registerResult === "Success") {
    // Faz login do usuario
    Authenticate::login(new User('', $email, $password));

    header('Location: dashboard.php');
    exit;
} else {
    // Registration failed (e.g., email already in use)
    echo $registerResult;
    echo "<br><a href='index.php'>Voltar</a>";
    exit;
}
?>
