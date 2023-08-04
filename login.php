<?php
session_start();

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'conexao.php';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT id, username, password FROM users_diario WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $password === $user['password']) {
        // Iniciar uma sessão
        $_SESSION['loggedin'] = true;
        
        // Redirecionar para diario.php
        header("Location: diario.php");
        exit();
    } else {
        header("Location: index.php?error=invalid_credentials");
    }

    $stmt->close();
    $conn->close();
}
?>