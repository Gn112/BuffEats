<?php
// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br
// Página Pessoa

ini_set('default_charset', 'utf-8');
include('confirmacaoEmail.php');

$servername = "34.95.153.229";
$database = "buffeat";
$username = "root";
$password = "COTemig123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Página Cliente
$full_name = $_POST["full_name"];
$cpf = $_POST["cpf"];
$numero_cel = $_POST["numero_cel"];
$cep = $_POST["cep"];

// Página Email
$email = $_POST["email"];
$senha = $_POST["senha"];

// Dado temporário até a implentação do sistema de pagamento
$opcao = 1;



// FUNÇÃO VALIDAR NOME
function validaNome($name)
{
    if (strlen($name) > 80) {
        return false;
    }
    if (!preg_match('/^[a-zA-Z ]+$/', $name)) {
        return false;
    } else {
        return true;
    }
}

// FUNÇÃO VALIDAR CPF
function validaCPF($cpf)
{

    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    $cpf = (int) $cpf;
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    return true;
}

// FUNÇÃO VALIDAR CELULAR
function validaCel($cel)
{
    // Verificação de dígitos
    $cel = preg_match("/^\([0-9]{2}\) 9?[0-9]{4}\-[0-9]{4}$/", $cel);

    if ($cel == false) {
        return false;
    } else {
        return true;
    }
}

// FUNÇÃO VALIDAR CEP
function validaCep($cep)
{

    if (!preg_match("/^[0-9]{5}\-[0-9]{3}$/", $cep)) {
        return false;
    } else if (preg_match('/(\d)\1{3}/', $cep)) {
        return false;
    } else if (strlen($cep) != 9) {
        return false;
    } else {
        return true;
    }
}

// FUNÇÃO VERIFICAR TAMANHO DO EMAIL
function validaEmail($email)
{
    if (strlen($email) > 256) {
        return false;
    } else {
        return true;
    }
}

//FUNÇÃO VERIFICAR TAMANHO DA SENHA
function validaSenha($senha)
{
    if (strlen($senha) > 25) {
        return false;
    } else if (strlen($senha) < 8) {
        return false;
    } else {
        return true;
    }
}


// TESTE
if (isset($_POST['cadastrar'])) {
    if (validaNome($full_name) == true && validaCPF($cpf) == true && validaCel($numero_cel) == true && validaCep($cep) == true && validaEmail($email) == true && validaSenha($senha) == true) {
        $sql = "INSERT INTO CADASTRO_CLIENTE (id_cliente, nome_completo, CPF, celular, CEP, email, senha, opcao_pagamento) 
        VALUES (default,'$full_name', '$cpf', '$numero_cel', '$cep', '$email', '$senha', '$opcao')";
        echo ("TANANANAAN");
        if (mysqli_query($conn, $sql)) {
            echo "Dados inseridos com sucesso.";
            confirmaEmail($email);
            $_POST["full_name"] = "";
            $_POST["cpf"] = "";
            $_POST["numero_cel"] = "";
            $_POST["cep"] = "";
            $_POST["email"] = "" ;
            $_POST["senha"] = "";
            $_POST["opcao"] = 0;
        } else {
            echo "<br>Ei... Tu colocou dados errados aí guria/piá. Verifica esse BO aí :/ <br> Erro ao inserir os dados: " . mysqli_error($conn);
        }
    } else {
        echo "<br>Ei... Tu colocou dados errados aí guria/piá. Verifica esse BO aí :/ <br> Erro ao inserir os dados: " . mysqli_error($conn);
    }

}

?>
