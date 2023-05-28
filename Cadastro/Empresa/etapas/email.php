<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Email</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="../mainCad.css">
</head>

<style>
    main {
        background-color: var(--color-cinzafundo);
        background: url(../img/onda_fundo.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
    }
</style>

<?php
$nome_empresa = $_POST["nome_empresa"];
$CNPJ = $_POST["CNPJ"];
$num_contato = $_POST["num_contato"];
$CEP = $_POST["CEP"];
print_r($_POST);
?>

<body>
    <main>
        <div class="formulario">
            <form action="pagamento.php" method="post">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <!-- Inputs invisiveis que enviam os dados das outras páginas -->
                <input type="hidden" name="nome_empresa" value="<?php echo $nome_empresa; ?>">
                <input type="hidden" name="CNPJ" value="<?php echo $CNPJ; ?>">
                <input type="hidden" name="num_contato" value="<?php echo $num_contato; ?>">
                <input type="hidden" name="CEP" value="<?php echo $CEP; ?>">

                <div class="row">
                    <label class="label">*Email:</label>
                    <input type="email" name="email" id="email" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Senha:</label>
                    <input type="password" name="senha" id="senha" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Confirmação de Senha:</label>
                    <input type="password" name="confirmaSenha" id="confirmaSenha" class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit">PRÓXIMO</button>
                </div>

            </form>

            <form method="post" action="../empresa.php" class="row">

                <!-- Inputs que retornam os dados para a página anterior -->
                <input type="hidden" name="nome_empresa" value="<?php echo $nome_empresa; ?>">
                <input type="hidden" name="CNPJ" value="<?php echo $CNPJ; ?>">
                <input type="hidden" name="num_contato" value="<?php echo $num_contato; ?>">
                <input type="hidden" name="CEP" value="<?php echo $CEP; ?>">

                <div class="row return_button">
                    <button type="submit">VOLTAR</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>