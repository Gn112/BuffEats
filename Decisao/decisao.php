<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Cadastro</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="decisao.css">
</head>

<body>
    <div class="container_cadastro">
        <div>
            <div>
                <h1 class="cadastro_title">Cadastro</h1>
                <h6 class="cadastro_subtitle">Você deseja se cadastrar como Cliente ou Empresa?</h6>
            </div>

            <div class="container_icon">
                <a href="../Cadastro/Cliente/pessoa.php"><img class="img_cliente" src="img/icon_cliente.png"
                        name="cliente" width="225px"></a>
                <a href="../Cadastro/Empresa/empresa.php"><img class="img_empresa" src="img/icon_empresa.png"
                        name="empresa" width="225px"></a>
            </div>

            <div class="container_nomes">
                <h6 id="lbl_clientes">
                    <a href="#" class="cadastro_id">
                        Cliente
                    </a>
                </h6>

                <h6>
                    <a href="#" class="cadastro_id">
                        Empresa
                    </a>
                </h6>
            </div>

            <a href="../Login/index.php">
                <button type="submit" name="submit" class="button_submit">RETORNAR</button>
            </a>
        </div>
    </div>
</body>

</html>