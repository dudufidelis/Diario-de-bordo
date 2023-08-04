<?php
    if (isset($_GET['error']) && $_GET['error'] === "invalid_credentials") {
        echo "<p>Credenciais inválidas. Por favor, verifique o usuário e a senha e tente novamente.</p>";
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl mb-4">Login</h2>
        <form action="login.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                <input type="text" id="username" name="username" required class="mt-1 p-2 w-full rounded-md border border-gray-300">
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="mt-1 p-2 w-full rounded-md border border-gray-300">
            </div>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Login</button>
        </form>
    </div>
</body>
</html>
