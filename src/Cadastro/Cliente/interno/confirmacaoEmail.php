<?php

// Consulta: https://mailtrap.io/blog/phpmailer-gmail/

// Importa classes do PHPMailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


function confirmaEmail($confirmar) {
    $mail = new PHPMailer(true);

    // Gera token
    function generateToken() {
        // Generate a random token
        $token = bin2hex(random_bytes(32));
        return $token;
    }
    
    $token = generateToken();
    $confirmacaoLink = 'https://example.com/confirmacaoEmail.php?token=' . $token;
    
    $emailMsg = 'Para confirmar seu email siga o <b>link abaixo</b>: <br> <a href="$confirmacaoLink">$confirmacaoLink</a>';

    // Configurações do servidor
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
    $mail->addAddress($confirmar, 'Usuário BuffEats');
    // Conteúdo da mensagem
    $mail->isHTML(true); // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Confirmação de Email CLIENTE';

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