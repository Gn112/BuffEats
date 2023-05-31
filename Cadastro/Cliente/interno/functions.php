<?php
// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br

// FUNÇÃO VALIDAR NOME
function validaNome($name, $callback)
{
    if (strlen($name) > 80) {
        $retorno = false;
        $callback($retorno);
        return false;
    }
    if (!preg_match('/^[a-zA-Z ]+$/', $name)) {
        $retorno = false;
        $callback($retorno);
        return false;
    }
    $retorno = true;
    return true;

}

// FUNÇÃO VALIDAR CPF
function validaCPF($cpf, $callback)
{

    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        $retorno = false;
        $callback($retorno);
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    $cpf = (int) $cpf;
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        $retorno = false;
        $callback($retorno);
        return false;
    }

    // Faz o calculo para validar o CPF
    // for ($t = 9; $t < 11; $t++) {
    //     for ($d = 0, $c = 0; $c < $t; $c++) {
    //         $d += $cpf[$c] * (($t + 1) - $c);
    //     }
    //     $d = ((10 * $d) % 11) % 10;
    //     if ($cpf[$c] != $d) {
    //         $retorno = false;
    //         $callback($retorno);
    //         return false;
    //     }
    // }
    // $retorno = true;
    // return true;
    // $callback($retorno);
}

// FUNÇÃO VALIDAR CELULAR
function validaCel($cel, $callback)
{
    // Verificação de dígitos
    $cel = preg_match("/^\([0-9]{2}\) 9?[0-9]{4}\-[0-9]{4}$/", $cel);

    if ($cel == false) {
        $callback($cel);
        return false;
    } else {
        return true;
    }
}

// FUNÇÃO VALIDAR CEP
function validaCep($cep, $callback)
{

    if (!preg_match("/^[0-9]{5}\-[0-9]{3}$/", $cep)) {
        $retorno = false;
        $callback($cep);
        return false;
    } else if (preg_match('/(\d)\1{3}/', $cep)) {
        $retorno = false;
        $callback($retorno);
        return false;
    } else if (strlen($cep) != 9) {
        $retorno = false;
        $callback($retorno);
    } else {
        return true;
    }
}

// FUNÇÃO VERIFICAR TAMANHO DO EMAIL
function validaEmail($email, $callback)
{
    if (strlen($email) > 256) {
        $retorno = false;
        $callback($retorno);
        return false;
    } else {
        $retorno = true;
        $callback($retorno);
        return true;
    }
}

//FUNÇÃO VERIFICAR TAMANHO DA SENHA
function validaSenha($email, $callback)
{
    if (strlen($email) > 25) {
        $retorno = false;
        $callback($retorno);
        return false;
    } else if (strlen($email) < 8) {
        $retorno = false;
        $callback($retorno);
        return false;
    } else {
        $retorno = true;
        $callback($retorno);
        return true;
    }
}

// VERIFICAR SE SENHA ESTÁ IGUAL
function confirmacaoSenha($confirmSenha, $senha, $callback)
{
    if ($confirmSenha != $senha) {
        $retorno = false;
        $callback($retorno);
        return false;
    } 
}

$Feedback = function ($retorno) {
    if ($retorno == false) {
        echo ('<span id="teste" style="opacity: 1; color:red; font-size:13px;"> Há dados inseridos incorretamente. Por favor, verifique. </span>');
    } else {
        echo ('<script type="javascript"> document.getElementById("teste").style.opacity = "0"; </script>');
        return true;
    }
};