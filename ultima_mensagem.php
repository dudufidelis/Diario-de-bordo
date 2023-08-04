<?php
include 'conexao.php';

$date = date("Y-m-d");

$sql = "SELECT data, mensagem FROM mensagens WHERE data = '$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = $row["data"];
        $mensagem = $row["mensagem"];
        echo "<p>$data: $mensagem</p>";
    }
} else {
    echo "<p>Nenhuma mensagem encontrada para hoje.</p>";
}

include 'fechar_conexao.php';
?>

