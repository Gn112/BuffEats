<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="mainCad.css">
</head>

<body>
    <main>
        <div> <!-- Essa div n faz nada (acho). Mas deixa ai -->
            <form method="post" id="formulario">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <div class="row">
                    <label class="label">*Nome da Empresa:</label>
                    <input type="text" name="nome_empresa" id="nome_empresa" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CNPJ/CPF:</label>
                    <input type="text" name="CNPJ/CPF" id="CNPJ/CPF" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*Número de Contato:</label>
                    <input type="text" name="num_contato" id="num_contato" class="input_box" required>
                </div>

                <div class="row">
                    <label class="label">*CEP:</label>
                    <input type="text" name="cep" id="cep" class="input_box" required>
                </div>

                <div class="row">
                    <button type="submit" name="submit" class="button_submit">PRÓXIMO</button>
                </div>

                <div class="row" id="return_button">
                    <a href="#">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>