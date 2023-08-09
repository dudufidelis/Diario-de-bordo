<!DOCTYPE html>
<html>
<head>
    <title>Diario | Mensagens Filtradas</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container-filter">
        <a class="back-link" href="diario.php">Voltar</a>
        
        <h2>Mensagens Filtradas por Data</h2>
        
        <?php
        include 'connection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data_busca = $_POST["data"];
            
            $sql = "SELECT data, mensagem FROM mensagens WHERE data = '$data_busca'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $data = $row["data"];
                    $mensagem = $row["mensagem"];
                    $dataFormatada = date("d/m/y", strtotime($data));

                    echo "
                    <div class='message'>
                        <div class='date'>$dataFormatada</div>
                        <p>$mensagem</p>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma mensagem encontrada para essa data.</p>";
            }
        }

        include 'close_connection.php';
        ?>
    </div>
</body>
</html>
