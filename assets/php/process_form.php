<?php
  // Receber os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['assunto'];
  $mensagem = $_POST['mensagem'];

  // Configurar o cabeçalho do e-mail
  $headers = "From: $nome <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";

  // Enviar o e-mail
  mail("santosdlaysa@gmail.com", $assunto, $mensagem, $headers);
?>
