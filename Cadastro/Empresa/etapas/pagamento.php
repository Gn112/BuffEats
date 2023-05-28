<?php
header('Content-Type: text/html; charset=utf-8');
require('conexaobd_empresa.php'); // Conexão com o arquivo de envia para o BD
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

<?php
// Página Empresa
$nome_empresa = $_POST["nome_empresa"];
$CNPJ = $_POST["CNPJ"];
$num_contato = $_POST["num_contato"];
$CEP = $_POST["CEP"];

// Página Email
$email = $_POST["email"];
$senha = $_POST["senha"];

// Dado temporário
$formas_recebimento = 1;

print_r($_POST);

?>

<body>
    <main>
        <div class="formulario">
            <form method="post">

                <h1 class="smaller_text">Verifique suas Informações</h1>


                <!-- Inputs que guardam as varíaveis -->

                <input type="hidden" name="nome_empresa" value="<?php echo $nome_empresa; ?>">
                <input type="hidden" name="CNPJ" value="<?php echo $CNPJ; ?>">
                <input type="hidden" name="num_contato" value="<?php echo $num_contato; ?>">
                <input type="hidden" name="CEP" value="<?php echo $CEP; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                <input type="hidden" name="formas_recebimento" value="<?php echo $formas_recebimento; ?>">

                <div id="container_summary">
                    <div class="row">
                        <h5 class="label">Nome da Empresa:</h6>
                            <h6>
                                <?php echo $nome_empresa; ?>
                            </h6>
                    </div>

                    <div class="row">
                        <h5 class="label">CNPJ:</h6>
                            <h6 class="label">
                                <?php echo $CNPJ; ?>
                            </h6>
                    </div>

                    <div class="row">
                        <h5 class="label">Número de Contato:</h6>
                            <h6>
                                <?php echo $num_contato; ?>
                            </h6>
                    </div>

                    <div class="row">
                        <h5 class="label">CEP:</h6>
                            <h6>
                                <?php echo $CEP; ?>
                            </h6>
                    </div>

                    <div class="row">
                        <h5 class="label">Email:</h6>
                            <h6>
                                <?php echo $email; ?>
                            </h6>
                    </div>
                </div>

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

                <input type="hidden" name="nome_empresa" value="<?php echo $nome_empresa; ?>">
                <input type="hidden" name="CNPJ" value="<?php echo $CNPJ; ?>">
                <input type="hidden" name="num_contato" value="<?php echo $num_contato; ?>">
                <input type="hidden" name="CEP" value="<?php echo $CEP; ?>">
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