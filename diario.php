<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redirecionar se não autenticado
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <title>Diário de Bordo</title>
</head>
<body>
    <div class="container mt-4">
        <h1>Diário de Bordo</h1>
        
        <!-- Formulário para adicionar mensagem -->
        <form action="adicionar_mensagem.php" method="post">
            <div class="mb-3">
                <label for="mensagem" class="form-label">Nova Mensagem</label>
                <input type="text" class="form-control" id="mensagem" name="mensagem">
            </div>
            <button type="submit" class="btn btn-primary">Adicionar Mensagem</button>
        </form>
        
        <hr>
        
        <!-- Exibir a última mensagem -->
        <h2>Última Mensagem</h2>
        <?php include 'ultima_mensagem.php'; ?>
        
        <hr>
        
        <!-- Formulário para buscar mensagem por data -->
        <h2>Buscar Mensagem por Data</h2>
        <form action="buscar_mensagem.php" method="post">
            <div class="mb-3">
                <label for="data" class="form-label">Selecione a Data</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <button type="submit" class="btn btn-primary">Buscar Mensagem</button>
        </form>
    </div>
</body>
</html>

<?php include 'fechar_conexao.php'; ?>
