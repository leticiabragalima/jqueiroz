<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Compor a mensagem de email
    $para = "seu-email@example.com"; // Seu endereço de email
    $assunto = "Nova Submissão de Formulário de Contato: $assunto";
    $corpoMensagem = "Nome: $nome\nTelefone: $telefone\nEmail: $email\n\nMensagem:\n$mensagem";

    // Enviar o email
    if (mail($para, $assunto, $corpoMensagem)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    }
}
?>
