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
    <title>Diário de Bordo</title>
</head>
<body>
    <div class="conteiner-diario">
        <h1>Diário CPD (Em desenvolvimento)</h1>
        <form action="add_report.php" method="post">
                <textarea type="text" name="mensagem" placeholder="Deixe sua mensagem aqui!"></textarea>
                <button type="submit">Enviar</button>
        </form>

        <h2>Últimos Relatos</h2>

        <?php include 'latest_reports.php'; ?>

        <div class="search">
            <h2>Buscar Relatos</h2>
            <form action="search_reports.php" method="post">
                    <input type="date" id="date-input" name="data" placeholder="DD / MM / YY">
                <button type="submit">Buscar Mensagem</button>
            </form>
        </div>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php include 'close_connection.php'; ?>
