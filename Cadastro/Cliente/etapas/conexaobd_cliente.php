<?php
ini_set('default_charset', 'utf-8');
?>

<?php
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


if (isset($_POST['cadastrar'])) {
    // Recupere os valores dos campos do formulário
    $full_name = (string)$_POST["full_name"];
    $cpf = (string)$_POST["cpf"];
    $numero_cel = (string)$_POST["numero_cel"];
    $cep = (string)$_POST["cep"];
    $email = (string)$_POST["email"];
    $senha = (string)$_POST["senha"];
    $opcao = (int)$_POST["opcao"];

    // Insira os dados no banco de dados
    $sql = "INSERT INTO CADASTRO_CLIENTE (id_cliente, nome_completo, CPF, celular, CEP, email, senha, opcao_pagamento) 
    VALUES (default,'$full_name', '$cpf', '$numero_cel', '$cep', '$email', '$senha', '$opcao')";

if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso.";
    $full_name = "";
    $cpf = "";
    $numero_cel = "";
    $cep = "";
    $email = "";
    $senha = "";
    $opcao = 0;
} else {
    echo "Erro ao inserir os dados: " . mysqli_error($conn);
}
}

	
mysqli_close($conn);

?>