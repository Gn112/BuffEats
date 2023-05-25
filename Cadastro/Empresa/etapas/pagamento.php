<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Login</title>
    <link rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="../mainEmpresa.css">
    <link rel="stylesheet" href="pagamento.css">
</head>

<body>
    <main>
        <div>
            <form method="post id="formulario">


                <h1 class="main_title">Cadastro</h1>

                <div class="row subtitle_div">
                    <span>+ Adicione uma forma de pagamento</span>
                    <p>(opcional)</p>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="../img/bank.png" alt="" srcset="">
                        <span>Conta Bancária</span>
                    </a>
                </div>

                <div class="row " id="dropdown">
                    <a href="#" class="opcao">
                        <img src="../img/bar.png" alt="" srcset="">
                        <span>PIX</span>
                    </a>
                </div>


                <div class="row">
                    <button type="submit" name="submit" class="button_submit">FINALIZAR</button>
                </div>

                <div class="row" id="return_button">
                    <a href="email.php">VOLTAR</a>
                </div>

            </form>
        </div>
    </main>
</body>

</html>