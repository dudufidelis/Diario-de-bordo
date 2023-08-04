<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data_busca = $_POST["data"];
    
    $sql = "SELECT data, mensagem FROM mensagens WHERE data = '$data_busca'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = $row["data"];
            $mensagem = $row["mensagem"];
            echo "<p>$data: $mensagem</p>";
        }
    } else {
        echo "<p>Nenhuma mensagem encontrada para essa data.</p>";
    }
}

include 'fechar_conexao.php';
?>
