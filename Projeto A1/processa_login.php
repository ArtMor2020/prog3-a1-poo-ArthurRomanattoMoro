<?php
require_once 'classes/User.php';
require_once 'classes/Authenticate.php';
require_once 'classes/Session.php';

Session::start();

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = $_POST['password'] ?? '';
$rememberEmail = isset($_POST['rememberEmail']);

// Cria objeto usuario para login
$userLoginAttempt = new User('', $email, $password);

// Tenta fazer login
$loginResult = Authenticate::login($userLoginAttempt);

if (str_starts_with($loginResult, "Success")) {
    if ($rememberEmail) {
        setcookie('userEmail', $email, time() + 3600, "/");
    } else { 
        setcookie('userEmail', '', time() + 0,"/"); 
    }
    header('Location: dashboard.php');
    exit;
} else {
    echo $loginResult;
    exit;
}
?>
