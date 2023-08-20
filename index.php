
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Sync | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Josefin+Sans:ital,wght@0,500;0,700;1,500;1,700&family=Lilita+One&family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="aviso">
        <h1>Projeto em<br>desenvolvimento</h1>
    </div>
    <div class="login-conteiner">
      <div class="login-img">
        <img src="assets/logo-white-transparency.png" alt="#">
      </div>
      <div class="login-area">
          <form action="login.php" method="post">
              <h2>Faça Login:</h2>
              <div>
                <input type="text" name="username" placeholder="Usuário">
                <label for="password" class="material-symbols-outlined"> person </label>
              </div>
              <div>
                <input type="password" name="password" placeholder="Senha">
                <label for="password" class="material-symbols-outlined"> key </label>     
              </div>
              <div class="btn-form">
                <button type="submit">Entrar</button>
              </div>
          </form>
      </div>
    </div>
  </body>
</html>

