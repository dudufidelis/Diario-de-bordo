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
    <link rel="stylesheet" href="style.css">
    <title>Diário de Bordo</title>
</head>
<body>
    <div class="conteiner-diario">
        <h1>Diário CPD</h1>
        <form action="adicionar_mensagem.php" method="post">
                <textarea type="text" name="mensagem" placeholder="Deixe sua mensagem aqui!"></textarea>
                <button type="submit">Enviar</button>
        </form>

        <!-- Exibir a última mensagem -->
        <h2>Últimas Mensagens</h2>
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
