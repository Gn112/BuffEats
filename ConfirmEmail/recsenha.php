

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuffEats | Recuperação de senha</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="confirmemail.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <main>
        <div id="container_rec">

            <div id="return">
                <a href="../Login/index.php">
                    <span class="material-symbols-outlined">
                        arrow_back
                    </span>
                </a>
            </div>

            <div class="row">
                <img src="img/icon_email.svg" alt="lock.png">
            </div>

            <div class="row">
                <h1 class="title">Confirmação de Email</h1>
                <h2 class="subtitle">
                Clique no botão abaixo para confirmar o seu endereço de email
                </h2>
            </div>

            <form action="email.php" method="post">
                <div class="row">
                <input type="email" name="email" class="input_box" required>
                </div>

                <div class="row">
                <button type="submit" name="submit" id="recuperar" class="small_button">
                    CONFIRMAR
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>