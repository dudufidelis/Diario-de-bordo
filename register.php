<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $username = $_POST['username'];
    $rawPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Verificar se as senhas coincidem
    if ($rawPassword !== $confirmPassword) {
        echo "As senhas não coincidem.";
    } else {
        $hashedPassword = password_hash($rawPassword, PASSWORD_DEFAULT);

        $query = "INSERT INTO users_diario (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $hashedPassword);
        $result = $stmt->execute();

        if ($result) {
            echo "Registro bem-sucedido!"; 
        } else {
            echo "Erro ao registrar: " . $conn->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 300px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 26px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 280px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #7e5dca;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #8e5dca;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Nome de Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirme a senha:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn">Registrar</button>
        </form>
    </div>
</body>
</html>
