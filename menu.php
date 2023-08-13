<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
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
    <title>Menu | CPD227</title>
</head>
<body>

    <div class="container">
        <a href="diario.php">
            <div class="card">
                <i class="material-symbols-outlined"> menu_book </i>
                <h3>Diario de bordo</h3>
                <p>Compartilhe com a equipe os acontecimentos e as próximas novidades.</p>
            </div>
        </a>
        <a href="temp.php">
            <div class="card">
                <i class="material-symbols-outlined"> inventory_2 </i>
                <h3>Estoque CPD</h3>
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