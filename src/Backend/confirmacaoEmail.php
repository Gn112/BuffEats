<?php

// Consulta: https://mailtrap.io/blog/phpmailer-gmail/
// Agradecimentos: https://youtu.be/8uZYI-EjTTA


// Importa classes do PHPMailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


function confirmaEmail($confirmar, $usuario, $id_user) {
    $mail = new PHPMailer(true);

    
    $emailMsg = 
    "Para confirmar seu email siga o <b>link abaixo</b>: <br><br>
    
    <a href='http://localhost/BuffeEats/src/ConfirmEmail/emailConfirmadoCli.php?token=$id_user'>Clique Aqui</a><br><br>
    
    Esta mensagem foi enviada pela empresa BuffEats.<br>
    Você está recebendo esta mensagem pois foi cadastrado no banco de dados da empresa.";

    // Configurações do servidor
    $mail->CharSet = "UTF-8";
    $mail->SMTPDebug = 1;
    $mail->isSMTP(); //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username = 'buffeats@outlook.com';
    $mail->Password = '#CotemigPIT3b2';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('buffeats@outlook.com', 'Buffeats');

     // Configure o remetente para ser o mesmo do nome de usuário


    // Define o destinatário
    $mail->addAddress($confirmar, $usuario);
    // Conteúdo da mensagem
    $mail->isHTML(true); // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Olá ' . $usuario . ' por favor confirme o seu Email na BuffEats';

    $mail->Body = $emailMsg;

    $mail->Timeout = 60;

    // Enviar  
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        die();
    }
}

?>