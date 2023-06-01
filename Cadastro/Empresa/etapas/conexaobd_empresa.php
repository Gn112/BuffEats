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
    $nome_empresa = (string) $_POST["nome_empresa"];
    $CNPJ = (string) $_POST["CNPJ"];
    $num_contato = (string) $_POST["num_contato"];
    $CEP = (string) $_POST["CEP"];
    $email = (string) $_POST["email"];
    $senha = (string) $_POST["senha"];
    $formas_recebimento = (int) $_POST["formas_recebimento"];

    // Insira os dados no banco de dados
    if($_POST["nome_empresa"] == " " || $_POST["CNPJ"] == " " || $_POST["num_contato"] == " " || $_POST["CEP"] == " " || $_POST["email"] == " " || $_POST["senha"] == " " ){
        echo('os valores não podem ser zerados');
    }
    else{
    $sql = "INSERT INTO CADASTRO_EMPRESA 
    (id_empresa, nome_empresa, CPF_CNPJ, num_contato, CEP, email, senha, formas_recebimento) 
    VALUES (default,'$nome_empresa', '$CNPJ', '$num_contato', '$CEP', '$email', '$senha', '$formas_recebimento')";

    if (mysqli_query($conn, $sql)) {
        echo "Dados inseridos com sucesso.";
    $_POST["nome_empresa"] = " ";
    $_POST["CNPJ"] = " ";
    $_POST["num_contato"] = " ";
    $_POST["CEP"] = " ";
    $_POST["email"] = " ";
    $_POST["senha"] = " ";
    $_POST["formas_recebimento"] = " ";
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
    }
}


mysqli_close($conn);

?>