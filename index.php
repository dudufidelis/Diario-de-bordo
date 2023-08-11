<?php
    if (isset($_GET['error']) && $_GET['error'] === "invalid_credentials") {
        echo "<p>Credenciais inválidas. Por favor, verifique o usuário e a senha e tente novamente.</p>";
    }
    ?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
    <div class="aviso">
        <h1>Projeto em<br>desenvolvimento</h1>
    </div>

    <div class="conteiner">
        <span class="material-symbols-outlined">
            menu_book
        </span>
        <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Usuário">        
                <input type="password" name="password" placeholder="Senha">
                <button type="submit">Entrar</button>
        </form>
    </div>
  </body>
</html>

