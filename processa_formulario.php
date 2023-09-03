<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Destinatário do e-mail (coloque seu endereço de e-mail)
    $destinatario = "vinicius-fontes99@hotmail.com";

    // Assunto do e-mail
    $assunto = "Formulario_Teste";

    // Monta o corpo do e-mail
    $corpo = "Nome: " . $nome . "\n";
    $corpo .= "Email: " . $email . "\n";
    $corpo .= "Mensagem: " . $mensagem;

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo)) {
        echo "<h2>Email enviado com sucesso!</h2>";
    } else {
        echo "<h2>O envio do email falhou.</h2>";
    }
} else {
    // Redireciona de volta ao formulário se o método de requisição não for POST.
    header("Location: formulario_contato.html");
    exit();
}
?>
