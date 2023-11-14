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


if (isset($_POST['voltarEmail'])) {
    $nomeCliente = ucwords((string) $_POST["full_name"]);
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente = (string) $_POST["numero_cel"];
    $cepCliente = (string) $_POST['cep'];
}
if (isset($_POST['submit'])) {
    $nomeCliente = ucwords((string) $_POST["full_name"]);
    $cpfCliente = (string) $_POST['cpf'];
    $celCliente = (string) $_POST["numero_cel"];
    $cepCliente = (string) $_POST['cep'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Cliente</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/mainCad.css">
</head>

<body>
    <main>
        <div class="formulario">
            <form action="emailPessoa.php" method="post" onsubmit="return validateForm()">

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome Completo:</label>
                    <input type="text" name="full_name" placeholder="Ana Júlia" id="full_name" class="input_box"
                        required value="<?= $nomeCliente ?>">
                </div>

                <div class="row">
                    <label class="label">*CPF:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;"
                        placeholder="999.999.999-11" oninput=mascara_cpf() maxlegth="14" type="text" name="cpf" id="cpf"
                        class="input_box" required value=<?= $cpfCliente ?>>
                </div>

                <div class="row">
                    <label class="label">*Número Celular:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
                        placeholder="(31) 99999-9999" type="text" oninput=mascara_telefone() maxlegth="15"
                        name="numero_cel" id="numero_cel" class="input_box" required value="<?= $celCliente ?>">
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;"
                        placeholder="99999-911" type="text" oninput=mascara_cep() maxlegth="9" name="cep" id="cep"
                        class="input_box" required value=<?= $cepCliente ?>>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit" onclick="validateForm()" name="submit">PRÓXIMO</button>
                </div>

                <script>
                    function validateForm() {
                        var fullName = document.getElementById('full_name').value;
                        var cpf = document.getElementById('cpf').value;
                        var cel = document.getElementById('numero_cel').value;
                        var cep = document.getElementById('cep').value;

                        // Validação dos campos
                        if (fullName.trim() === '') {
                            alert('Por favor, preencha o campo Nome Completo.');
                            return false;
                        }

                        if (!validateName(fullName)) {
                            alert('O campo Nome Completo deve conter apenas letras.');
                            return false;
                        }


                        if (cel.trim() === '' || cel.length !== 15) {
                            alert('Por favor, verifique o Número informado.');
                            return false;
                        }

                        if (cep.trim() === '' || cep.length != 9) {
                            alert('Por favor, verifique o CEP informado.');
                            return false;
                        }

                        if (!validateCPF(cpf)) {
                            alert('Por favor, verifique o CPF informado.');
                            return false;
                        }

                        return true;
                    }

                    function validateName(fullName) {
                        var lettersRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/;
                        return lettersRegex.test(fullName);
                    }

                    function validateCPF(cpf) {
                        cpf = cpf.replace(/[^\d]+/g, '');

                        if (cpf === '' || cpf.length !== 11) {
                            return false;
                        }

                        // Verificação dos dígitos verificadores
                        var add = 0;
                        for (var i = 0; i < 9; i++) {
                            add += parseInt(cpf.charAt(i)) * (10 - i);
                        }

                        var rev = 11 - (add % 11);
                        if (rev === 10 || rev === 11) {
                            rev = 0;
                        }

                        if (rev !== parseInt(cpf.charAt(9))) {
                            return false;
                        }

                        add = 0;
                        for (i = 0; i < 10; i++) {
                            add += parseInt(cpf.charAt(i)) * (11 - i);
                        }

                        rev = 11 - (add % 11);
                        if (rev === 10 || rev === 11) {
                            rev = 0;
                        }

                        if (rev !== parseInt(cpf.charAt(10))) {
                            return false;
                        }

                        return true;
                    }

                </script>
                <div class="row return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
    <script src="js/mascaras.js"></script>

</body>

</html>
