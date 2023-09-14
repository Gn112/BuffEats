<?php
session_start();
include_once("conexao.php");
//$id_cliente = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
//$result_CADASTRO_CLIENTE = "SELECT * FROM CADASTRO_CLIENTE WHERE id_cliente = '1'";
//$resultado_CADASTRO_CLIENTE = mysqli_query($conn, $result_CADASTRO_CLIENTE);
//$row_CADASTRO_CLIENTE = mysqli_fetch_assoc($resultado_CADASTRO_CLIENTE);

function DescriptografaSenha($senha_criptografada) {
    $algoritmo = "AES-256-CBC";
    $chave = "_B_3Ats";
    $iv = "wNYtCnelXfOa6uiJ";

    // Decodifica a senha criptografada de base64
    $senha_criptografada = base64_decode($senha_criptografada);

    // Descriptografa a senha
    $senha_descriptografada = openssl_decrypt($senha_criptografada, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

    return $senha_descriptografada;
}

$email = $_SESSION["email"];
$senha = $_SESSION["password"];
$numero = $_SESSION["numero"];
$nome = $_SESSION["nomeempresa"];
$id = $_SESSION['id_cliente'];
$senhaSem = DescriptografaSenha($senha);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scss/profile.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>BuffEats - Alterar Dados</title>
</head>

<body>
    <main>
        <div class="main_container">

            <div id="top">
                <a href="javascript:javascript:history.go(-1)">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                    <span>Retornar para Página Anterior</span>
                </a>
            </div>
            <form method="post" action="edit_usuario.php">
            <div class="profileInfo_container">
                <div>
                    <img class="logo" src="../../globalAssets/img/empresa_g.png" alt="" srcset="">
                </div>
                <span class="cliente_titulo">Bem-vindo(a), <?php echo $nome?></span>
                <span class="label">Gerencie suas informações e segurança.</span>
            </div>
            <div class="row">
                <div class="grid_space"> 
                <input type="hidden" name="id_cliente" value="<?php echo $id  ?>">
                    <label class="label">Nome:</label>
                   <input type="text" name="nome" id="usuario" class="input_box" value="<?php echo $nome ?>" >
                </div>
                <div class="grid_space">
                    <label class="label">Número de Contato:</label>
                    <input type="text" name="contato" id="num_celular" class="input_box" value="<?php echo $numero ?>" >
                </div>
            </div>

            <div class="row">
                <div class="grid_space">
                    <label class="label">Email:</label>
                     <input type="text" name="email" id="num_celular" class="input_box" value="<?php echo $email ?>"> 
                </div>

                <div class="grid_space">
                    <label class="label">Senha:</label>
                  <input type="text" name="senha" id="senha" class="input_box" value="<?php echo $senhaSem ?>">
                </div>
            </div>

            <div id="bottom">
                <buttom id="sair">SAIR</buttom>
                <input  name="altera"type="submit" id="alterar"></input>
            </div>
        </div>
</form>
    </main>
</body>

</html>