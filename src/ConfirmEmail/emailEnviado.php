<?php
// Agradecimentos: https://youtu.be/8uZYI-EjTTA

session_start();

$chave = filter_input(INPUT_GET, "token", FILTER_SANITIZE_STRING);

if (!empty($chave)) {
    echo $chave;

    $servername = "34.136.11.187";
    $database = "Buffeats";
    $username = "root";
    $password = "COTemig123";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    mysqli_query($conn, "SET SQL_SAFE_UPDATES=0;");

    $sql = "SELECT * FROM CADASTRO_CLIENTE WHERE cpf = '$chave'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        


        $sql = "UPDATE CADASTRO_CLIENTE SET EmailConfirma = 1 WHERE CPF = '$chave';";

        $resultUpdate = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) > 0) {
            echo "EMAIL CONFIRMADO";
        }

        mysqli_query($conn, "SET SQL_SAFE_UPDATES=1;");



    } else {
        echo "CADASTRO NÃO EXISTENTE!!!";

        mysqli_query($conn, "SET SQL_SAFE_UPDATES=1;");


    }


} else {
    echo "Endereço Inválido.";
    header("Location: ../../index.html");
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="PT-br">
<script>

</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Confirmação de Email</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="confirmemail.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main>
        <div id="container_rec">

            <div class="row">
                <img src="img/icon_confirmacao.svg" alt="lock.png">
            </div>

            <div class="row">
                <h1 class="title">Email Confirmado!</h1>
                <h2 class="subtitle">
                    Agradecemos pela confirmação do endereço de email!
                </h2>
            </div>

            <div class="row">
                <!-- <a href="../Login/index.php"></a>
                <button onclick="" name="volta" id="buttonVoltar" class="small_button">
                    CLIQUE AQUI PARA VOLTAR OU AGUARDE 5 SEGUNDOS
                </button>
                </a> -->
            </div>
        </div>
    </main>
</body>

</html>