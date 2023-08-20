<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
include('/Diario-de-bordo/conections/connection.php');

// Função para deslogar
function logout()
{
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

if (isset($_GET['logout'])) {
    logout();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Josefin+Sans:ital,wght@0,500;0,700;1,500;1,700&family=Lilita+One&family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/favicon_io/favicon.ico" type="image/x-icon">
    <title>Menu | CPD227</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <h1>TeamSync</h1>
            <a href="?logout">Sair</a>
        </div>
        <a href="diario.php">
            <div class="card">
                <i class="material-symbols-outlined"> menu_book </i>
                <h3>Diário de bordo</h3>
                <p>Compartilhe com a equipe os acontecimentos e as próximas novidades.</p>
            </div>
        </a>
        <a href="temp.php">
            <div class="card">
                <i class="material-symbols-outlined"> inventory_2 </i>
                <h3>Estoque Cpd</h3>
                <p>Gestão de Equipamentos e Suprimentos Disponíveis.</p>
            </div>
        </a>
        <a href="temp.php">
            <div class="card">
                <i class="material-symbols-outlined"> task </i>
                <h3>Pêndencias</h3>
                <p>Organização e Acompanhamento das Tarefas Pendentes e Prioridades.</p>
            </div>
        </a>
    </div>
</body>
</html>