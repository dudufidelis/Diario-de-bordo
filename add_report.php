<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id'];
    $mensagem = $_POST["mensagem"];
    $data = date("Y-m-d");
    $sql = "INSERT INTO mensagens (data, mensagem, id) VALUES ('$data', '$mensagem', '$id')";
    if ($conn->query($sql) === TRUE) {
        header("Location: diario.php");
    } else {
        echo "Erro ao adicionar mensagem: " . $conn;
    }
}

include 'close_connection';
?>
