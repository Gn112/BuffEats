<?php
header('Content-Type: text/html; charset=utf-8');
require('conexaobd_cliente.php'); // Conexão com o arquivo de envia para o BD
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Pagamento</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="../mainCad.css">
    <link rel="stylesheet" href="pagamento.css">
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

<!-- Puxa informações do forms anterior -->
<?php
// Página Pessoa
$full_name = $_POST["full_name"];
$cpf = $_POST["cpf"];
$numero_cel = $_POST["numero_cel"];
$cep = $_POST["cep"];

// Página Email
$email = $_POST["email"];
$senha = $_POST["senha"];

// Dado temporário até a implentação do sistema de pagamento
$opcao = 1;

print_r($_POST);

?>

<body>
    <main>
        <div class="formulario">
            <form method="post">

                <h1 class="main_title">Cadastro</h1>


                <!-- Inputs que guardam as varíaveis -->

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                <input type="hidden" name="opcao" value="<?php echo $opcao; ?>">

                <!-- <div class="row subtitle_div">
                    <span>+ Adicione uma forma de pagamento</span>
                    <p>(opcional)</p>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="../img/card.png" alt="" srcset="">
                        <span>Cartão de Crédito ou Débito</span>
                    </a>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="../img/barcode.png" alt="" srcset="">
                        <span>PIX</span>
                    </a>
                </div> -->


                <div class="row">
                    <button type="submit" name="cadastrar" class="button_submit">FINALIZAR</button>
                </div>


            </form>

            <form method="post" action="email.php">

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="senha" value="<?php echo $senha; ?>">


                <div class="row return_button">
                    <button type="submit">VOLTAR</button>
                </div>
            </form>



        </div>
    </main>
</body>

</html>