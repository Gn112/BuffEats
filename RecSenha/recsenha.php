
<?php

if(isset($_GET['submit'])){
    $email = (string)$_GET['email'];
    
    }
?>


<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Recuperação de senha</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="recsenha.css">
</head>
<body>
    <div class="container_recsenha">
        <div>
            <div class="container_icon">
                <img src="img/icon_cadeado.png" width="180px">
            </div>
            <h1 class="recsenha_title">Esqueceu a senha?</h1>
            <h6 class="recsenha_subtitle">Insira seu email para enviarmos um código de recuperação de senha</h6>
            <div class="container_input">
                <input type="email" name="email" id="email" class="input_box">
            </div>
            <div class="container_button">
            <button type="submit" name="submit" class="button_enviar">ENVIAR</button>
            </div>
        </div>
        <button type="submit" name="submit" class="button_submit">RETORNAR</button>
        </div>
    </div>
</body>
</html>