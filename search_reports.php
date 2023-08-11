<!DOCTYPE html>
<html>
<head>
    <title>Diario | Mensagens Filtradas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Braah+One&family=Josefin+Sans:ital,wght@0,500;0,700;1,500;1,700&family=Lilita+One&family=Signika+Negative:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-filter">
        <div class="filter-header">
            <a class="back-link" href="diario.php" class="material-symbols-outlined"> Voltar </a>
            <h2>Mensagens Filtradas por Data</h2>
        </div>
        
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
                    <div class='reports'>
                        <div>
                            <p>$mensagem</p>
                        </div>
                        <div>
                            <p class='msgDate'>$dataFormatada</p>
                        </div>
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
