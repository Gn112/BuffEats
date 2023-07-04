<?php
ini_set('default_charset', 'utf-8');
?>

<?php
$servername = "34.136.11.187";
$database = "Buffeats";
$username = "root";
$password = "COTemig123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




if (isset($_POST['submit'])) {
    // Recupere os valores dos campos do formulário
    $email = (string)$_POST["email"];
    $senha = (string)$_POST["senha"];
   
    $query = "SELECT * FROM CADASTRO_CLIENTE WHERE email = '$email'";
    $resultado = mysqli_query($conn, $query);
    
    // Verifica se a consulta retornou algum resultado
    if (mysqli_num_rows($resultado) == 1) {
        // Obtém os dados do usuário do resultado da consulta
        $dadosUsuario = mysqli_fetch_assoc($resultado);
    }
    
        // Verifica se a senha digitada está correta
        if (password_verify($password, $dadosUsuario['senha']))
        {
            echo "sexo" ;
        }
    
    }





?>