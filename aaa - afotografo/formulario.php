<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $to = "seuemail@dominio.com"; 
    $subject = "Solicitação de Orçamento - Clara Martinez Fotografia";
    $message = "Nome: $nome email: $email mensagem: $mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Obrigado por entrar em contato! Fique atento no email! cabaço!</p>";
    } else {
        echo "<p>Erro</p>";
    }
}
?>
