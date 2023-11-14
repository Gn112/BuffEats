<?php
// CONSULTA: https://www.alura.com.br/artigos/php-validacao-dados-nacionais-br
// Página Pessoa

ini_set('default_charset', 'utf-8');
include('confirmacaoEmail.php');

$servername = "35.225.119.62";
    $database = "Buffeats";
    $username = "root";
    $password = "COTemig123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// CRIPTOGRAFAR SENHA
function Senha($psswd){
    $algoritmo = "AES-256-CBC";
    $chave = "_B_3Ats";
    $iv = "wNYtCnelXfOa6uiJ";

    $msg_criptografada = openssl_encrypt($psswd, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
    return base64_encode($msg_criptografada);
}   

// Página Empresa
$nome_empresa = $_POST["nome_empresa"];
$CNPJ = $_POST["CNPJ"];
$num_contato = $_POST["num_contato"];
$CEP = $_POST["CEP"];

// Página Email
$email = $_POST["email"];
$senha = Senha($_POST["senha"]);

// Dado temporário
$formas_recebimento = 1;

// Email não confirmado
$confirmadoEmail = 0;


// FUNÇÃO VALIDAR NOME
function validaEmpresa($empresa)
{
    if (strlen($empresa) > 80) {
        return false;
    }
    if (!preg_match('/^[a-zA-Z ]+$/', $empresa)) {
        return false;
    } else {
        return true;
    }
}

// FUNÇÃO VALIDAR CNPJ
function validaCNPJ($cnpj)
{
    // Remove caracteres especiais do CNPJ
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

    // Verifica se o CNPJ possui 14 dígitos
    if (strlen($cnpj) != 14) {
        return false;
    }

    // Verifica se todos os dígitos são iguais (caso contrário, o CNPJ seria inválido)
    if (preg_match('/(\d)\1{13}/', $cnpj)) {
        return false;
    }

    // Calcula o primeiro dígito verificador
    $soma = 0;
    for ($i = 0, $j = 5; $i < 12; $i++) {
        $soma += $cnpj[$i] * $j;
        $j = ($j == 2) ? 9 : $j - 1;
    }
    $resto = $soma % 11;
    $dv1 = ($resto < 2) ? 0 : 11 - $resto;

    // Calcula o segundo dígito verificador
    $soma = 0;
    for ($i = 0, $j = 6; $i < 13; $i++, $j = ($j == 2) ? 9 : $j - 1) {
        $soma += $cnpj[$i] * $j;
    }
    $resto = $soma % 11;
    $dv2 = ($resto < 2) ? 0 : 11 - $resto;

    // Verifica se os dígitos verificadores são iguais aos do CNPJ
    if ($cnpj[12] == $dv1 && $cnpj[13] == $dv2) {
        return true;
    } else {
        return false;
    }
}

// FUNÇÃO VALIDAR CELULAR
function validaCelEmpresa($cel)
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
function validaCepEmpresa($cep)
{

    if (!preg_match("/^[0-9]{5}\-[0-9]{3}$/", $cep)) {
        return false;
    } else if (preg_match('/(\d)\1{3}/', $cep)) {
        return false;
    } else if (strlen($cep) != 9) {
    } else {
        return true;
    }
}

// FUNÇÃO VERIFICAR TAMANHO DO EMAIL
function validaEmailEmpresa($email)
{
    if (strlen($email) > 256) {
        return false;
    } else {
        return true;
    }
}

//FUNÇÃO VERIFICAR TAMANHO DA SENHA
function validaSenhaEmpresa($senha)
{
    if (strlen($senha) > 25) {
        return false;
    } else if (strlen($senha) < 8) {
        return false;
    } else {
        return true;
    }
}

if (isset($_POST['cadastrarEmpresa'])) {
    if (validaEmpresa($nome_empresa) == true && validaCNPJ($CNPJ) == true && validaCelEmpresa($num_contato) == true && validaCepEmpresa($CEP) == true && validaEmailEmpresa($email) == true && validaSenhaEmpresa($senha) == true) {
        $sql = "INSERT INTO CADASTRO_EMPRESA 
        (id_empresa, nome_empresa, CPF_CNPJ, num_contato, CEP, email, senha, formas_recebimento, EmailConfirma, biografia, id_categoria_fk) 
        VALUES (default,'$nome_empresa', '$CNPJ', '$num_contato', '$CEP', '$email', '$senha', '$formas_recebimento', '$confirmadoEmail', 'Não informado', 0)";
       
        if (mysqli_query($conn, $sql)) {
            header('Location: confirmaempresa.php');
            confirmaEmail($email, $nome_empresa, $CNPJ);
            $_POST["nome_empresa"] = "";
            $_POST["CNPJ"] = "";
            $_POST["num_contato"] = "";
            $_POST["CEP"] = "";
            $_POST["email"] = "";
            $_POST["senha"] = "";
            $_POST["formas_recebimento"] = "";
            $_POST["confirmadoEmail"] = 0;
            header('Location: confirmaempresa.php');
            exit;
            
        } else {
            echo "<BR>Ei... Tu colocou dados errados aí guria/piá. Verifica esse BO aí :/ <br> Erro ao inserir os dados: " . mysqli_error($conn);
        }
    } else {
        echo "<br>Ei... Tu colocou dados errados aí guria/piá. Verifica esse BO aí :/ <br> Erro ao inserir os dados: " . mysqli_error($conn);
    }

}
?>
