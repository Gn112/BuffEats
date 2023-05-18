

<?php

// FUNÇÃO REMOVER CARACTERES ESPECIAIS
function clean($string) {
    $string = str_replace(' ', '-', $string); // Substitui todos os espaços com hífens.
 
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Remove caracteres especiais.
}

// FUNÇÃO VALIDAR CPF
function validaCPF($cpf, $callback) {
    
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        $retorno = false;
        $callback($retorno);
        // return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    $cpf = (int) $cpf;
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        $retorno = false;
        $callback($retorno);
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
            $callback($retorno);
            // return false;
        }
    }
    $retorno = true;
    // return true;

    $callback($retorno);
}

$cpfFeedback = function($retorno){
    if ($retorno == false){
        // echo "<script type='javascript'>alert('CPF inválido');";
        echo "<script>alert('CPF inválido');";
        echo "javascript:window.location='cadastroCli.php';</script>";
    
    }
};


ini_set('default_charset', 'utf-8');


if(isset($_POST['submit'])){
// $nomeCliente = (string)$_POST['nomeCompleto'];
$cpfCliente = (string)$_POST['cpf'];
// $celCliente  = (string)$_POST['numCelular'];
// $cepCliente = (string)$_POST['cep'];

validaCPF($cpfCliente, $cpfFeedback);

}
?>




<!DOCTYPE html>
<!-- CÓDIGO HTML -->
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="cadastroCli.css">
</head>
<body>
<?php
?>

    <main>
        <div id="div_form_login">
            <!-- Formulário -->
                <form method="post" id="formulario">
                <h1 class="cadastro_title">Cadastro</h1>
                    <!-- Nome -->
                    <label class="cadastro_subtitle">*Nome Completo:</label>
                    <input type="text" name="nomeCompleto" id="username" class="input_box" >
                    <!-- CPF -->
                    <label class="cadastro_subtitle">*CPF:</label>
                    <input type="text" name="cpf" id="username" class="input_box" required>
                    <!-- Número de celular -->
                    <label class="cadastro_subtitle">*Número Celular:</label>
                    <input type="text" name="numCelular" id="username" class="input_box" >
                    <!-- CEP -->
                    <label class="cadastro_subtitle">*CEP:</label>
                    <input type="text" name="cep" id="username" class="input_box" >
                    <!-- Enviar dados -->
                    <button type="submit" name="submit" class="button_submit">PRÓXIMO</button>
                </form>
        </div>
    </main>
   
    
<?php


?>
    
</body>
</html>
