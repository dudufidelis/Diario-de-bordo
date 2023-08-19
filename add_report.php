<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    include 'connection.php';

    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
        $date = date("Y-m-d");
        $mensagem = $_POST["mensagem"];

        $sql = "INSERT INTO mensagens (user_id, date, mensagem) VALUES ('$user_id', '$date', '$mensagem')";

        if ($conn->query($sql) === TRUE) {
            header("Location: diario.php");
        } else {
            echo "Erro ao adicionar a entrada: " . $conn->error;
        }
    } else {
        echo "ID do usuário não fornecido.";
    }

    $conn->close();
}
?>