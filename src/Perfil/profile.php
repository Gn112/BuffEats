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
                    <label class="label">Usuário:</label>
                    <input type="text" name="usuario" id="usuario" class="input_box" required value="">
                </div>

                <div class="grid_space">
                    <label class="label">Número Celular:</label>
                    <input type="text" name="num_celular" id="num_celular" class="input_box" required value="">
                </div>
            </div>

            <div class="row">
                <div class="grid_space">
                    <label class="label">Email:</label>
                    <input type="text" name="num_celular" id="num_celular" class="input_box" required value="">
                </div>

                <div class="grid_space">
                    <label class="label">Senha:</label>
                    <input type="password" name="senha" id="senha" class="input_box" required value="">
                </div>
            </div>

            <div id="bottom">
                <buttom id="sair">SAIR</buttom>
                <buttom id="alterar">ALTERAR</buttom>
            </div>
        </div>
        
    </main>
</body>

</html>