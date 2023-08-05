<?php
include 'conexao.php';

$date = date("Y-m-d");

$sql = "SELECT data, mensagem FROM mensagens WHERE data = '$date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = $row["data"];
        $mensagem = $row["mensagem"];
        $dataFormatada = date("d/m/y", strtotime($date));
        echo "
        <div class='last_messages'> 
            <div>
                <p>$mensagem</p>
            </div>
            <div class='msgDate'>
                <p>$dataFormatada</p>
            </div>
        </div>
         ";
    }
} else {
    echo "<p>Nenhuma mensagem encontrada para hoje.</p>";
}

include 'fechar_conexao.php';
?>

