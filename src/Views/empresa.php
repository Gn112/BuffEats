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
    <title>BuffEats | Empresa</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="css/mainCadEmpresa.css">
</head>

<body>
    <main>
        <div class="formulario">
            <form action="etapas/email.php" method="post" onsubmit="return validateForm()">

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome da Empresa:</label>
                    <input oninput=mascara_nomeEmpresa() type="text" name="nome_empresa" id="nome_empresa"
                        class="input_box" placeholder="Delícias da Dinda" required>
                </div>

                <div class="row">
                    <label class="label">*CNPJ:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;"
                        placeholder="99.999.999/0001-00" oninput=mascara_cnpj() maxlegth="18" type="text" name="CNPJ"
                        id="CNPJ" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Número de Contato:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;"
                        placeholder="(11) 91111-1111" maxlegth="15" type="text" name="num_contato" id="num_contato"
                        class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input
                        onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false ;"
                        placeholder="99999-999" oninput=mascara_cep() maxlegth="9" type="text" name="CEP" id="CEP"
                        class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" class="button_submit" onclick="validateForm()">PRÓXIMO</button>
                </div>

                <div class="row return_button">
                    <a href="../../Decisao/decisao.php">VOLTAR</a>
                </div>
            </form>
        </div>
    </main>
    <script src="js/mascarasEmpresa.js"> </script>

    <script>
        function validateForm() {
            var nome_empresa = document.getElementById('nome_empresa').value;
            var CNPJ = document.getElementById('CNPJ').value;
            var num_contato = document.getElementById('num_contato').value;
            var CEP = document.getElementById('CEP').value;

            // Validação dos campos
            if (nome_empresa.trim() === '') {
                alert('Por favor, preencha o campo Nome da Empresa.');
                return false;
            }

            if (!validateName(nome_empresa)) {
                alert('O campo Nome da Empresa deve conter apenas letras.');
                return false;
            }

            if (CNPJ.trim() === '' || CNPJ.length != 18) {
                alert('Por favor, verifique o CNPJ informado.');
                return false;
            }

            if (num_contato.trim() === '' || num_contato.length !== 15) {
                alert('Por favor, verifique o Número de Contato informado.');
                return false;
            }

            if (CEP.trim() === '' || CEP.length != 9) {
                alert('Por favor, verifique o CEP informado.');
                return false;
            }

            return true;
        }

        function validateName(nome_empresa) {
            var lettersRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/;
            return lettersRegex.test(nome_empresa);
        }

    </script>
</body>

</html>