<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br

// FUNÇÃO REMOVER CARACTERES ESPECIAIS
function clean($string)
{
    $string = str_replace(' ', '-', $string); // Substitui todos os espaços com hífens.

    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Remove caracteres especiais.
}

// FUNÇÃO VALIDAR CPF
function validaCPF($cpf, $callback)
{

    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        $retorno = false;
        $callback($retorno, "CPF");
        // return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    $cpf = (int) $cpf;
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        $retorno = false;
        $callback($retorno, "CPF");
        // return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            $retorno = false;
            $callback($retorno, "CPF");
            // return false;
        }
    }
    $retorno = true;
    // return true;

    $callback($retorno, "CPF");
}

// FUNÇÃO VALIDAR CELULAR
function validaCel($cel, $callback)
{
    // Verificação de dígitos
    $cel = preg_match("/^\([0-9]{2}\) \9[0-9]{4}\-[0-9]{4}$/", $cel);

    if ($cel == false){
        $callback($cel, "Celular");
    }
    
}

// FUNÇÃO FEEDBACK
$Feedback = function ($retorno, $tipo) {
    // echo "<script type='javascript'>alert('CPF inválido');";
    // if ($retorno == false) {
    // echo "<script>alert('" . $tipo . " inválido');";
    // echo "javascript:window.location='pessoa.php';</script>";
    // } 
    if ($retorno == false) {
        echo(" <script type='javascript'> document.getElementById('teste').style.opacity = '1'; </script>");
    } else{
        echo(" <script type='javascript'> document.getElementById('teste').style.opacity = '0'; </script>");
    }
};

if (isset($_POST['submit'])) {
    // $nomeCliente = (string)$_POST['full_name'];
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente  = (string) $_POST['numero_cel'];
    // $cepCliente = (string)$_POST['cep'];

    validaCPF($cpfCliente, $Feedback);

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
                    <input type="text" name="full_name" id="full_name" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="input_box" required>
                    <!-- Feedback de erro -->
                   <span id="teste" style="opacity: 0; position:absolute; margin-left: 50px; color:red;">CPF inválido!</span>
                </div>

                <div class="row">
                    <label class="label">*Número Celular:</label>
                    <input type="text" name="numero_cel" id="numero_cel" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input type="text" name="cep" id="cep" class="input_box" required>
                </div>

                <div class="row">
                    <a href="main.php?dir=etapas&file=email" >
                    <button  type="submit" class="button_submit" name="submit">PRÓXIMO</button>
                    </a>
                </div>

                <div class="row" id="return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>