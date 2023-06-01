<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

// Ideia:
// Feedbacks de erros foram apagados pois a verificação geral será feita na página de resumo das informações.
// Ou seja, a validação irá rodar nos valores dos index quando chegar a página de resumo, sendo aí o apontamento dos erros.

$nomeCliente = "";
$cpfCliente = "";
$celCliente = "";
$cepCliente = "";


if (isset($_POST['voltarEmail'] )) {
    $nomeCliente = ucwords((string) $_POST["full_name"]);
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente = (string) $_POST["numero_cel"];
    $cepCliente = (string) $_POST['cep'];
}
if (isset($_POST['submit'] )) {
    $nomeCliente = ucwords((string) $_POST["full_name"]);
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente = (string) $_POST["numero_cel"];
    $cepCliente = (string) $_POST['cep'];
}
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Cliente</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>

<?php
print_r($_POST); 
?>

<body>
    <main>
        <div class="formulario">
            <form action="etapas/email.php" method="post">

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome Completo:</label>
                    <input type="text" name="full_name" placeholder="Ana Júlia" id="full_name" class="input_box" required value="<?= $nomeCliente ?>">
                </div>

                <div class="row">
                    <label class="label">*CPF:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;" placeholder="999.999.999-11" oninput=mascara_cpf() maxlegth="14" type="text" name="cpf" id="cpf" class="input_box" required value=<?= $cpfCliente ?>>
                </div>

                <div class="row">
                    <label class="label">*Número Celular:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" placeholder="(31) 99999-9999" type="text" oninput=mascara_telefone() maxlegth="15" name="numero_cel" id="numero_cel" class="input_box" required value="<?= $celCliente ?>">
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" placeholder="99999-911" type="text" oninput=mascara_cep() maxlegth="9" name="cep" id="cep" class="input_box" required value=<?= $cepCliente ?>>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit" name="submit">PRÓXIMO</button>
                </div>

                <div class="row return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
    <script src="interno/mascaras.js"></script>
</body>

</html>