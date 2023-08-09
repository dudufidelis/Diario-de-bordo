<?php
include 'connection.php';

$today = date("Y-m-d");
$yesterday = date("Y-m-d", strtotime("-1 day"));

$sql = "SELECT data, mensagem FROM mensagens WHERE data IN ('$today', '$yesterday')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data = $row["data"];
        $mensagem = $row["mensagem"];
        
        // Formatar as datas para exibição
        $dataFormatada = date("d/m/y", strtotime($data));
        
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
    echo "<p>Nenhuma mensagem encontrada para hoje ou ontem.</p>";
}

include 'close_connection.php';
?>
