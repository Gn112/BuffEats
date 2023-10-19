<?php
header('Content-Type: text/html; charset=utf-8');
require('../interno/functions.php'); // Conexão com o arquivo de envia para o BD
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
            <form action="../interno/functions.php" method="post">

                <h1 class="smaller_text">Verifique suas Informações</h1>


                <!-- Inputs que guardam as varíaveis -->

                <input type="hidden" name="full_name" value="<?php echo $full_name; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="numero_cel" value="<?php echo $numero_cel; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                <input type="hidden" name="opcao" value="<?php echo $opcao; ?>">

                <div id="container_summary">
                    <div class="row">
                        <h5 class="label">Nome Completo:</h6>
                        <h6><?php echo $full_name; ?></h6>
                    </div>

                    <div class="row">
                        <h5 class="label">CPF:</h6>
                        <h6 class="label"><?php echo $cpf; ?></h6>
                    </div>

                    <div class="row">
                        <h5 class="label">Número Celular:</h6>
                        <h6><?php echo $numero_cel; ?></h6>
                    </div>

                    <div class="row">
                        <h5 class="label">CEP:</h6>
                        <h6><?php echo $cep; ?></h6>
                    </div>

                    <div class="row">
                        <h5 class="label">Email:</h6>
                        <h6><?php echo $email; ?></h6>
                    </div>
                </div>
                
                <div class="row" id="container_terms">
                    <span class="terms_text">Ao clicar em "Finalizar" você concorda com os 
                        <a href="../../../Termos/index.php">Termos de Uso</a>
                    e as <a href="../../../Privacidade/index.php">Políticas de Privacidade</a></span>
                </div>

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