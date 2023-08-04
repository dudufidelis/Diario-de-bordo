<?php 
session_start();

if ($user && $password === $user['password']) {
    // Autenticado com sucesso
    $_SESSION['loggedin'] = true;
    header("Location: diario.php");
    exit();
} else {
    header("Location: index.html?error=invalid_credentials");
}

?>
