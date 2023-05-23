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
        echo('<span id="teste" style="opacity: 1; position:absolute; margin-left: 50px; color:red;"> '.$tipo.' inválido!</span>');
    } else{
        echo('<script type="javascript"> document.getElementById("teste").style.opacity = "0"; </script>');
    }
};

if (isset($_POST['submit'])) {
    // $nomeCliente = (string)$_POST['full_name'];
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente  = (string) $_POST['numero_cel'];
    // $cepCliente = (string)$_POST['cep'];


}
?>
