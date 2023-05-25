<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="../mainCad.css">
</head>
<?php
$full_name = $_POST["full_name"];
$cpf = $_POST["cpf"];
$numero_cel = $_POST["numero_cel"];
$cep = $_POST["cep"];
?>

<body>
    <main>
        <div>
            <form action="pagamento.php" method="post" id="formulario">

                <div class="page_counter"></div>

                <h1 class="main_title">Cadastro</h1>

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">
                <!-- <div>
                    <?php
                    // echo $full_name; 
                    // echo $cpf;
                    // echo $numero_cel;
                    // echo $cep;
                    ?>
                </div> -->
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
                    <a href="main.php?dir=etapas&file=pagamentos">
                        <button type="submit" class="button_submit">PRÓXIMO</button>
                    </a>
                </div>

                <div class="row" id="return_button">
                    <a href="#">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>