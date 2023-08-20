<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check_username = "SELECT id FROM users_diario WHERE usarname = '$username'";
    $result = $conn->query($check_username);

    if ($result->num_rows > 0) {
        echo "Este username já está em uso. Por favor, escolha outra.";
    } else {
        $insert_query = "INSERT INTO users_diario (name, username, password) VALUES ('$name', '$username', '$password')";
        if ($conn->query($insert_query) === TRUE) {
            $conn->close();
            header("Location: index.php");
            exit();
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Josefin+Sans:ital,wght@0,500;0,700;1,500;1,700&family=Lilita+One&family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="username">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="username">Nome de Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Registrar</button>
        </form>
    </div>
</body>
</html>
