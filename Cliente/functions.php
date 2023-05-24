<?php

// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br

// FUNÇÃO VALIDAR NOME
function validaNome($name, $callback){
    if(strlen($name)>80){
        $retorno = false;
        $callback($retorno, "Excedendo 80 caracteres. Nome");
    }

    if (!preg_match('/^[a-zA-Z0-9]+/', $name)){
        $retorno = false;
        $callback($retorno, "Caracteres especiais detectados. Nome");

    }
    ucwords($name);
    $retorno = true;
    $callback($retorno, "Caracteres especiais detectados. Nome");


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
    // for ($t = 9; $t < 11; $t++) {
    //     for ($d = 0, $c = 0; $c < $t; $c++) {
    //             $d += $cpf[$c] * (($t + 1) - $c);
    //     }
    //     $d = ((10 * $d) % 11) % 10;
    //     if ($cpf[$c] != $d) {
    //         $retorno = false;
    //         $callback($retorno, "CPF");
    //         // return false;
    //     }
    // }
    $retorno = true;
    // return true;

    $callback($retorno, "CPF");
}

// FUNÇÃO VALIDAR CELULAR
function validaCel($cel, $callback)
{
    // Verificação de dígitos
    $cel = preg_match("/^\([0-9]{2}\) 9?[0-9]{4}\-[0-9]{4}$/", $cel);

    if ($cel == false){
        $callback($cel, "Celular");
    }
    
}

// FUNÇÃO VALIDAR CEP
function validaCep($cep, $callback){
    $cep = preg_match("/^[0-9]{5}\-[0-9]{3}$/", $cep);

    if ($cep == false){
        $callback($cep, "Cep");
    }
    

}

// FUNÇÃO FEEDBACK
$Feedback = function ($retorno, $tipo) {
    if ($retorno == false) {
        echo('<span id="teste" style="opacity: 1; position:absolute; margin-left: 50px; color:red;"> '.$tipo.' inválido!</span>');
    } else{
        echo('<script type="javascript"> document.getElementById("teste").style.opacity = "0"; </script>');
    }
};



?>
