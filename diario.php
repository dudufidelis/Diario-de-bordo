

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
    <script src="js/script.js" defer></script>
    <title>Diário de Bordo</title>
</head>
<body>
    <div class="container-diario">
        <div class="header-diario">
            <h1>Diário de Bordo</h1>
            <a href="menu.php" class="material-symbols-outlined" class="exit-btn"> close </a>
        </div>
      
            <div class="add-form">
                <h2>Adicionar relato</h2>
                <form action="add_report.php" method="post" onsubmit="return validateForm();">
                    <?php
                        session_start();
                        if (isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];
                            echo "<input type='hidden' name='user_id' value='$user_id'>";
                        }
                    ?>
                    <textarea id="inputTextArea" type="text" name="mensagem" placeholder="Escreva aqui!"></textarea>
                    <div class="btn-section">
                        <button type="submit">Salvar</button>
                        <button id="btn-batch">Batch</button>
                    </div>
                </form>
            </div>
        
            <div class="header-reports">
                <h2>Últimos Relatos</h2>
                <div class="search-form">
                    <h2>Filtrar/data:</h2>
                    <form action="search_reports.php" method="post">
                        <div class="search">
                            <input type="date" id="date-input" name="data" placeholder="DD / MM / YY">
                            <button type="submit">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
                <?php include 'latest_reports.php'; ?>
        </div>
    </div>
    
</body>
</html>

<?php include 'close_connection.php'; ?>
