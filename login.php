<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users_diario WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: menu.php");
        } else {
            echo "Senha incorreta. Por favor, tente novamente.";
        }
    } else {
        echo "Matrícula não encontrada. Por favor, registre-se primeiro.";
    }

    $conn->close();
}
?>
