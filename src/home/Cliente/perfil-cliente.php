<!-- CLIENTE

<input type="submit" name="logoff" value="Deslogar">
<?php
if (isset($_POST['logoff'])) {
    session_destroy();
    header('Location: ../../Login/index.php');
}
?> -->

<!DOCTYPE html>
<html lang="pt-br" class="sm:scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | BuffEats</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="min-h-screen bg-cinzafundo">
    <header class="drop-shadow-xl text-fontecinza bg-branco sticky top-0 z-10">
        <section class="max-w-full mx-auto p-4 flex justify-around itens-center">
            <a href="#">
                <img src="../../globalAssets/img/logo.png">
            </a>

            <div>
                <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer focus:outline">
                    &#9776;
                </button>
                <nav class="hidden md:block space-x-3 text-xl" aria-label="main">
                    <a href="#" class="text-fontecinza text-md">Home</a>
                    <a href="#" class="text-fontecinza text-md">Quem Somos</a>
                    <a class="signIn" id="criar">criar conta</a>
                    <a class="redBtn" id="entrar">Entrar</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu"></section>
    </header>
</body>

</html>