<?php

// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br

// FUNÇÃO VALIDAR NOME
function validaNome($name, $callback){
    if(strlen($name)>80){
        $retorno = false;
        $callback($retorno, "Caracteres excedidos. Nome");
    } else
    if (!preg_match('/^[a-zA-Z ]+$/', $name)){
        $retorno = false;
        $callback($retorno, "Deve conter apenas letras. Nome");

    } else{
    $retorno = true;
    }

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
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        $cpf = (int) $cpf;
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        $retorno = false;
        $callback($retorno, "CPF");
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
        }
    }
    $retorno = true;

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

    if(!preg_match("/^[0-9]{5}\-[0-9]{3}$/", $cep) ){
        $retorno = false;
        $callback($cep, "Cep");
    }

    if (preg_match('/(\d)\1{3}/', $cep)) {
        $retorno = false;
        $callback($retorno, "Cep");
    }
    

}

// FUNÇÃO VERIFICAR TAMANHO DO EMAIL
function validaEmail($email, $callback){
    if(strlen($email)>256){
        $retorno = false;
        $callback($retorno, "Caracteres excedidos. Email");
    } else {
    $retorno = true;
    $callback($retorno, "");
    }

}

//FUNÇÃO VERIFICAR TAMANHO DA SENHA
function validaSenha($email, $callback){
    if(strlen($email)>25){
        $retorno = false;
        $callback($retorno, "Caracteres excedidos. Senha");
    } else if(strlen($email)<8)
    {
        $retorno = false;
        $callback($retorno, "Mínimo de caracteres: 8. Senha");
    }
    
    else {
    $retorno = true;
    $callback($retorno, "");
    }

}

// VERIFICAR SE SENHA ESTÁ IGUAL
function confirmacaoSenha($confimSenha, $senha, $callback){
    if($confimSenha != $senha){
        echo('<span id="teste" style="opacity: 1; margin-top:75px; position:absolute; color:red; font-size:13px;"> As senhas não são iguais. </span>');
    } else{
        echo('<script type="javascript"> document.getElementById("teste").style.opacity = "0"; </script>');

    }
}


// FUNÇÃO FEEDBACK INVÁLIDO
$Feedback = function ($retorno, $tipo) {
    if ($retorno == false) {
        echo('<span id="teste" style="opacity: 1; margin-top:75px; position:absolute; color:red; font-size:13px;"> '.$tipo.' inválido/a!</span>');
    } else{
        echo('<script type="javascript"> document.getElementById("teste").style.opacity = "0"; </script>');
    }
};




?>
