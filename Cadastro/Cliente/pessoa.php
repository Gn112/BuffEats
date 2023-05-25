<?php
require("functions.php");


header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

$nomeCliente = "";
$cpfCliente = "";
$celCliente = "";
$cepCliente = "";

if (isset($_POST['submit'])) {
    $nomeCliente = ucwords((string) $_POST["full_name"]);
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente = (string) $_POST["numero_cel"];
    $cepCliente = (string) $_POST['cep'];


    // TENTATIVA DE USO DE COOKIES 
    // $cookie_nomeCliente = "Nome do cliente";
    // $cookie_value = $nomeCliente;

    // setcookie((string) $cookie_nomeCliente, $cookie_value, 3600, '/Cliente/');
}


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
    <!-- <script> window.location.reload() </script> -->

</head>
<style>
    html,
    body {
        margin: 0;
        height: 100%;
        /* Garante que o body e o html ocupem toda a tela */
        color: var(--color-fontecinza);
    }

    body {
        background-color: var(--color-cinzafundo);
        background: url(img/onda_fundo.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
    }
</style>

<body>
    <main>
        <div>
            <!-- Essa div n faz nada (acho). Mas deixa ai -->
            <form method="post" id="formulario">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome Completo:</label>
                    <input type="text" name="full_name" placeholder="Ana Júlia" id="full_name" class="input_box" required value="<?= $nomeCliente ?>" >
                    <!-- Feedback de erro -->
                    <?php
                    if (isset($_POST['submit'])) {
                        validaNome($nomeCliente, $Feedback);
                    }

                    print_r($_POST);
                    echo($nomeCliente);
                    ?>
                </div>

                <div class="row">
                    <label class="label">*CPF:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;" placeholder="999.999.999-11" oninput=mascara_cpf() maxlegth="14" type="text" name="cpf" id="cpf" class="input_box" required value=<?= $cpfCliente ?>>
                    <!-- Feedback de erro -->
                    <?php
                    if (isset($_POST['submit'])) {
                        validaCPF($cpfCliente, $Feedback);
                    }
                    ?>
                </div>

                <div class="row">
                    <label class="label">*Número Celular:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"  placeholder="(31) 99999-9999" type="text" oninput=mascara_telefone() maxlegth="15" name="numero_cel" id="numero_cel" class="input_box" required value="<?= $celCliente ?>">
                    <!-- Feedback de erro -->
                    <?php
                    if (isset($_POST['submit'])) {
                        validaCel($celCliente, $Feedback);
                    }
                    ?>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"  placeholder="99999-911" type="text" oninput=mascara_cep() maxlegth="9" name="cep" id="cep" class="input_box" required value=<?= $cepCliente ?>>
                    <!-- Feedback de erro -->
                    <?php
                    if (isset($_POST['submit'])) {
                        validaCep($cepCliente, $Feedback);
                    }
                    ?>
                </div>

                <div class="row">
                    <a href="main.php?dir=etapas&file=email">
                        <button type="submit" class="button_submit" name="submit">PRÓXIMO</button>
                    </a>
                </div>

                <div class="row" id="return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>
            </form>
        </div>
    </main>
    <script src="mascaras.js"></script>
    <!-- FUNÇÃO JS CHAMANDO A FUNÇÃO DO PHP: https://pt.stackoverflow.com/questions/369414/executar-uma-fun%C3%A7%C3%A3o-php-com-o-javascript -->
</body>

</html>