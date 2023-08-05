<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mensagem = $_POST["mensagem"];
    $data = date("Y-m-d");
     // Formato de data aceito pelo MySQL
    
    $sql = "INSERT INTO mensagens (data, mensagem) VALUES ('$data', '$mensagem')";
    if ($conn->query($sql) === TRUE) {
        header("Location: diario.php");
    } else {
        echo "Erro ao adicionar mensagem: " . $conn->error;
    }
}

include 'fechar_conexao.php';
?>
