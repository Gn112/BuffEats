<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Cadastro</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/decisao.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main>
        <div class="container_cadastro">
            <div id="return">
                <a href="login.php">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                </a>
            </div>

            <div id="container_titles">
                <h1 class="cadastro_title">Cadastro</h1>
                <h6 class="cadastro_subtitle">Você deseja se cadastrar como Cliente ou Empresa?</h6>
            </div>

            <div class="container_icon">

                <div class="container_image">
                    <a href="pessoa.php">
                        <img class="img_icon" src="img/icon_cliente.png" name="cliente">
                    </a>

                    <h6 id="lbl_clientes">
                        <a href="#" class="cadastro_id">
                            Cliente
                        </a>
                    </h6>
                </div>

                <div class="container_image">
                    <a href="empresa.php">
                        <img class="img_icon" src="img/icon_empresa.png" name="empresa">
                    </a>

                    <h6>
                        <a href="#" class="cadastro_id">
                            Empresa
                        </a>
                    </h6>
                </div>
            </div>
        </div>
    </main>
</body>

</html>