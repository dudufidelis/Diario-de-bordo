<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = $_POST["mensagem"];
    $data = date("Y-m-d");
    $sql = "INSERT INTO mensagens (data, mensagem) VALUES ('$data', '$mensagem')";
    if ($conn->query($sql) === TRUE) {
        header("Location: diario.php");
    } else {
        echo "Erro ao adicionar mensagem: " . $conn->error;
    }
}

include 'close_connection';
?>
