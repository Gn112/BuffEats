<?php
session_start();
include_once("conexao.php");
$id_cliente = filter_input(INPUT_GET, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
$result_CADASTRO_CLIENTE = "SELECT * FROM CADASTRO_CLIENTE WHERE id_cliente = '1'";
$resultado_CADASTRO_CLIENTE = mysqli_query($conn, $result_CADASTRO_CLIENTE);
$row_CADASTRO_CLIENTE = mysqli_fetch_assoc($resultado_CADASTRO_CLIENTE);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interno/scss/profile.css">
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

            <div class="profileInfo_container">
                <div>
                    <img class="logo" src="../globalAssets/img/cliente_g.png" alt="" srcset="">
                </div>
                <span class="cliente_titulo">Bem-vindo(a), @Cliente</span>
                <span class="label">Gerencie suas informações e segurança.</span>
            </div>
            <div class="row">
                <div class="grid_space"> 
                <input type="hidden" name="id_cliente" value="<?php echo $row_CADASTRO_CLIENTE['id_cliente']; ?>">
                    <label class="label">Usuário:</label>
                   <input type="text" name="nome_completo" id="usuario" class="input_box" value="<?php echo $row_CADASTRO_CLIENTE['nome_completo'];?>">
                </div>
                <div>
                    <label class="label">Número Celular:</label>
                    <input type="text" name="celular" id="num_celular" class="input_box" value="<?php echo $row_CADASTRO_CLIENTE['celular']; ?>" >-
                </div>
            </div>

            <div class="row">
                <div class="grid_space">
                    <label class="label">Email:</label>
                     <input type="text" name="email" id="num_celular" class="input_box" value="<?php echo $row_CADASTRO_CLIENTE['email']; ?>"> 
                </div>

                <div class="grid_space">
                    <label class="label">Senha:</label>
                  <input type="text" name="senha" id="senha" class="input_box" value="<?php echo $row_CADASTRO_CLIENTE['senha']; ?>">
                </div>
            </div>

            <div id="bottom">
                <buttom id="sair">SAIR</buttom>
                <buttom id="alterar" a href='edit_usuario.php?id_cliente=" . $row_CADASTRO_CLIENTE['id_cliente'] . ">ALTERAR</buttom>
            </div>
        </div>
        
    </main>
</body>

</html>