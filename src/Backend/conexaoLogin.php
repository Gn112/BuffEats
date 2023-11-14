<?php
ini_set('default_charset', 'utf-8');
?>

<?php
session_start();

// Conectar ao banco de dados
include_once('conexao.php');

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
                
                 $_SESSION['id_cliente'] = $row["id_cliente"];
                 $id = $_SESSION['id_cliente'];

                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;

                $celular = $row["celular"];
                $nomecompleto = $row["nome_completo"];
                     $_SESSION["celular"] = $celular;
                     $_SESSION["nome_completo"] = $nomecompleto;

                header("Location: ../Views/home-cliente.php");
            }
        } else {
            $sql = "SELECT * FROM CADASTRO_EMPRESA WHERE email = '$email' AND senha = '$password'";
            $result = $conn->query($sql);

            $row = mysqli_fetch_assoc($result);


            if ($row['email'] === $email && $row['senha'] == $password) {
                echo "Logado com sucesso!";
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;

                $_SESSION['id_empresa'] = $row["id_empresa"];
                 $id_empresa = $_SESSION['id_empresa'];

                
                $numero = $row["num_contato"];
                $nomeempresa = $row["nome_empresa"];
                     $_SESSION["numero"] = $numero;
                     $_SESSION["nomeempresa"] = $nomeempresa;

                header("Location: ../Views/home-empresa.php");
            } else {
                header("Location: ../Views/confirmalogin.php");
            }
        }
    }
}

?>