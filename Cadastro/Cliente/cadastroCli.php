
<?php
ini_set('default_charset', 'utf-8');


if(isset($_POST['submit'])){
$senha = (string)$_POST['password'];
$email = (string)$_POST['username'];

}
?>




<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="cadastroCli.css">
</head>
<body>


    <main>
        <div id="div_form_login">
                <form method="post" id="formulario">
                <h1 class="cadastro_title">Cadastro</h1>
                    <label class="cadastro_subtitle">*Nome Completo:</label>
                    <input type="text" name="username" id="username" class="input_box" required>
                    <label class="cadastro_subtitle">*CPF:</label>
                    <input type="text" name="username" id="username" class="input_box" required>
                    <label class="cadastro_subtitle">*Número Celular:</label>
                    <input type="text" name="username" id="username" class="input_box" required>
                    <label class="cadastro_subtitle">*CEP:</label>
                    <input type="text" name="username" id="username" class="input_box" required>
                    <button type="submit" name="submit" class="button_submit">PRÓXIMO</button>
                </form>
        </div>
    </main>
   
    <br>

    
</body>
</html>
