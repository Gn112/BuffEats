<?php
require("functions.php");


header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
    <link rel="stylesheet" href="pagamento.css">
</head>

<body>
    <main>
        <div> <!-- Essa div n faz nada (acho). Mas deixa ai -->
            <div id="formulario">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <div class="row subtitle_div">
                    <span>+ Adicione uma forma de pagamento</span>
                    <p>(opcional)</p>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="img/card.png" alt="" srcset="">
                        <span>Cartão de Crédito ou Débito</span>
                    </a>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="img/barcode.png" alt="" srcset="">
                        <span>PIX</span>
                    </a>
                </div>


                <div class="row">
                    <button type="submit" name="submit" class="button_submit">FINALIZAR</button>
                </div>

                <div class="row" id="return_button">
                    <a href="#">VOLTAR</a>
                </div>

</div>
        </div>
    </main>
    <script src="drop.js"></script>
</body>

</html>