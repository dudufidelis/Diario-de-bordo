<?php
session_start();

// Verifica se o usuário está logado antes de destruir a sessão
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Destruir a sessão
    session_destroy();
    
    // Redirecionar para a página de login ou outra página após o logout
    header("Location: index.php");
    exit();
}
?>
