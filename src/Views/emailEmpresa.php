<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Email</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/mainCad.css">
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
?>

<body>
    <main>
        <div class="formulario">
            <form action="pagamento.php" method="post" onsubmit="return validateForm()">

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
                    <button type="submit" class="button_submit" onclick="validateForm()">PRÓXIMO</button>
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
            </form>
        </div>
        <script>
    function validateForm() {
        // Chamar as funções de validação e armazenar os resultados
        var isEmailValid = validateEmail();
        var arePasswordsValid = comparePasswords();

        // Verificar se todas as validações foram bem-sucedidas
        if (isEmailValid && arePasswordsValid) {
            return true; // Permitir o envio do formulário
        } else {
            return false; // Impedir o envio do formulário
        }
    }

    function validateEmail() {
        var email = document.getElementById('email').value;

        // Expressão regular para validação de email
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!regex.test(email)) {
            alert('Por favor, verifique o Email informado.');
            return false;
        }

        return true;
    }

    function comparePasswords() {
        var senha = document.getElementById('senha').value;
        var confirmaSenha = document.getElementById('confirmaSenha').value;

        if (senha.trim() === '') {
            alert('Por favor, preencha o campo Senha.');
            return false;
        }

        if (confirmaSenha.trim() === '') {
            alert('Por favor, preencha o campo Confirmação de Senha.');
            return false;
        }

        if (senha !== confirmaSenha) {
            alert('As senhas não coincidem. Por favor, verifique as senhas informadas.');
            return false;
        }

        return true;
    }
</script>
        </div>
        </form>
        </div>
    </main>
    <script src="../interno/validacao.js"></script>
</body>

</html>