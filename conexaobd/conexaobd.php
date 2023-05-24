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
    $nome = (string)$_POST["nome"];
    $CPF = (string)$_POST["CPF"];
    $celular = (string)$_POST["celular"];
    $cep = (string)$_POST["CEP"];
    $email = (string)$_POST["email"];
    $senha = (string)$_POST["senha"];
    $opcao = (int)$_POST["opcao"];

    // Insira os dados no banco de dados
    $sql = "INSERT INTO CADASTRO_CLIENTE (id_cliente, nome_completo, CPF, celular, CEP, email, senha, opcao_pagamento) VALUES (default,'$nome', '$CPF', '$celular', '$cep', '$email', '$senha', '$opcao')";
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso.";
        $nome = " ";
        $CPF = " ";
        $celular = " ";
        $cep = " ";
        $email = " ";
        $senha = " ";
        $opcao = 0;

    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
}
	
	
mysqli_close($conn);
?>

<html>
<head>
    <title>Formulário PHP</title>
</head>
<body>

<form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">CPF:</label>
        <input type="text" name="CPF" id="CPF" required><br>

        <label for="nome">Celular:</label>
        <input type="text" name="celular" id="celular" required><br>

        <label for="email">CEP:</label>
        <input type="text" name="CEP" id="CEP" required><br>

        <label for="nome">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="email">Senha:</label>
        <input type="text" name="senha" id="senha" required><br>

        <label for="email">Opcao:</label>
        <input type="number" name="opcao" id="opcao" required><br>

        <input type="submit" value="Enviar" name="cadastrar">
    </form>
</body>
</html>
