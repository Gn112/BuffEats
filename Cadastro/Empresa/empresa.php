<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Empresa</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>



<?php
print_r($_POST); ?>

<body>
    <main>
        <div class="formulario">
            <form action="etapas/email.php" method="post">

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome da Empresa:</label>
                    <input type="text" name="nome_empresa" id="nome_empresa" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CNPJ:</label>
                    <input type="text" name="CNPJ" id="CNPJ" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Número de Contato:</label>
                    <input type="text" name="num_contato" id="num_contato" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input type="text" name="CEP" id="CEP" class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit">PRÓXIMO</button>
                </div>

                <div class="row return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>