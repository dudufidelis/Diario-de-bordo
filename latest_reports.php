<?php
include 'connection.php';

$today = date("Y-m-d");
$yesterday = date("Y-m-d", strtotime("-1 day"));


$sql = "SELECT m.date, m.mensagem, u.name
        FROM mensagens m
        INNER JOIN users_diario u ON m.user_id = u.id
        WHERE m.date IN ('$today', '$yesterday')";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $date = $row["date"];
        $mensagem = $row["mensagem"];
        $nomeUsuario = $row["name"];
        
        $dataFormatada = date("d/m/y", strtotime($date));
        
        echo "
        <div class='reports'> 
            <div>
                <p>$mensagem</p>    
            </div>
            <div class='msgDate'>
                <p>$nomeUsuario -</p>
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
