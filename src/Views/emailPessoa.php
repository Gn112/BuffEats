<?php
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');

$emailCliente = "";
$senhaCliente = "";
$confirmSenhaCliente = "";


if (isset($_POST["submitEmail"])) {
    $emailCliente = strtolower((string) $_POST["email"]);
    $senhaCliente = (string) $_POST["senha"];
    $confirmSenhaCliente = (string) $_POST["confirma_senha"];
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Email</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/mainCad.css">
</head>


<?php
$full_name = $_POST["full_name"];
$cpf = $_POST["cpf"];
$numero_cel = $_POST["numero_cel"];
$cep = $_POST["cep"];
?>

<body>
    <main>
        <div class="formulario">
            <form action="pagamento.php" method="post" onsubmit="return validateForm()">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">

                <div class="row">
                    <label class="label">*Email:</label>
                    <input type="email" name="email" id="email" class="input_box" required value=<?= $emailCliente ?>>
                </div>
                <div class="row">
                    <label class="label">*Senha:</label>
                    <input type="password" name="senha" id="senha" class="input_box" required value=<?= $senhaCliente ?>>
                </div>

                <div class="row">
                    <label class="label">*Confirmação de Senha:</label>
                    <input type="password" name="confirma_senha" id="confirmaSenha" class="input_box" required
                        value=<?= $confirmSenhaCliente ?>>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit" onclick="validateForm()"
                        name="submitEmail">PRÓXIMO</button>
                </div>

            </form>

            <form method="post" action="pessoa.php" class="row">

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">

                <div class="row return_button">
                    <button type="submit" name="voltarEmail">VOLTAR</button>
                </div>
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
    </main>
</body>

</html>