<?php
session_start();

// if (isset($_POST['logoff'])) {
//     session_destroy();
//     header('Location: ../../Login/index.php');
// }
?>

<!DOCTYPE html>
<html lang="pt-br" class="sm:scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Empresa | BuffEats</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="../../globalAssets/js/animations.js" defer></script>
</head>

<body class="min-h-screen bg-cinzafundo">
    <header class="drop-shadow-xl text-fontecinza bg-branco sticky top-0 z-10">
        <section
            class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
            <a href="#">
                <img src="../../globalAssets/img/logo.png">
            </a>
            <div>
                <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer">
                    &#9776;
                </button>
                <nav class="hidden md:flex items-center space-x-3" aria-label="main">
                    <a href="#" class="text-lg font-medium">Home</a>
                    <a href="#" class="text-lg font-medium">Pedidos</a>
                    <a href="../../Perfil/PerfilEmpresa/GerenciaEmpresa/gerenciaEmpresa.php" class="text-lg font-medium">Gerencie sua Empresa</a>
                    <a href="../../Perfil/PerfilEmpresa/AdicionarProdutos/adicionarProdutos.php" class="text-lg font-medium">Gerencie seus Produtos</a>
                    <a href="#" class="text-lg font-medium">Quem Somos</a>
                    <a href="../../Perfil/PerfilEmpresa/profile.php" id="empresa">
                        <img class="d" src="../../globalAssets/img/empresa_p.png" alt="">
                    </a>
                    <a href="#" class="text-lg text-vermelho font-medium">Sair</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu"
            class="absolute top-0 bg-branco w-full text-3xl flex-col justify-content-center origin-top animate-open-menu hidden">
            <button class="text-8xl self-end px-6">
                &times;
            </button>
            <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Home</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Pedidos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Gerencie sua Empresa</a>
                <a href="../../Perfil/PerfilEmpresa/AdicionarProdutos/adicionarProdutos.php" class="w-full text-center p-6 hover:opacity-90">Gerencie seus Produtos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
                <a href="../../Perfil/PerfilEmpresa/profile.php" class="w-full text-center p-6 hover:opacity-90" id="empresa">
                    Perfil
                </a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Sair</a>
            </nav>
        </section>
    </header>
</body>

</html>