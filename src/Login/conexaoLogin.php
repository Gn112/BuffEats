<?php
ini_set('default_charset', 'utf-8');
?>

<?php
session_start();

// Conectar ao banco de dados
// $servername = "34.136.11.187";
// $usernam = "root";
// $passwor = "COTemig123";
// $dbname = "Buffeats";

$servername = "localhost";
$usernam = "root";
$passwor = "";
$dbname = "Buffeats";

$conn = new mysqli($servername, $usernam, $passwor, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Função de criptografia
function Senha($password)
{
    $algoritmo = "AES-256-CBC";
    $chave = "_B_3Ats";
    $iv = "wNYtCnelXfOa6uiJ";

    $msg_criptografada = openssl_encrypt($password, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);
    return base64_encode($msg_criptografada);
}

// Verificar se o formulário de login foi enviado
if (isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['password'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = Senha($_POST['password']);
        echo $email;
        echo $password;

        // Verificar as credenciais do usuário no banco de dados
        $sql = "SELECT * FROM CADASTRO_CLIENTE WHERE email = '$email' AND senha = '$password'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['senha'] == $password) {
                echo "Logado com sucesso!";
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                header("Location: ../home/Cliente/perfil-cliente.php");
            }
        } else {
            $sql = "SELECT * FROM CADASTRO_EMPRESA WHERE email = '$email' AND senha = '$password'";
            $result = $conn->query($sql);

            $row = mysqli_fetch_assoc($result);


            if ($row['email'] === $email && $row['senha'] == $password) {
                echo "Logado com sucesso!";
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                header("Location: ../home/Empresa/perfil-empresa.php");
            } else {
                echo "Nada!";
            }
        }
    }
}

?>