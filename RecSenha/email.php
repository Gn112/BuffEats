<?php 

// Consulta: https://mailtrap.io/blog/phpmailer-gmail/

// Importa classes do PHPMailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require_once '../vendor/autoload.php';

$email = $_POST["email"];

$mail = new PHPMailer(true);

    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'gabrielsiriani19@gmail.com';
    $mail->Password   = 'djynqqduneazvflo';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";
    // Define o remetente
    $mail->setFrom('buffeats.food@gmail.com', 'Buffeats');
    // Define o destinatário
    $mail->addAddress($email, 'Usuário BuffEats');
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Recuperação de Senha';
    $mail->Body    = 'Para recuperar sua senha siga o <b>link abaixo</b>: <br> <a href="#">https://BuffEats.com.br/rec/userExemplo1111</a>!';
    // $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    // Enviar  
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        header("Location: emailEnviado.php");
        die();
    }

?>