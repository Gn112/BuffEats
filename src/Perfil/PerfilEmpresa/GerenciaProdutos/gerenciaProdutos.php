<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br" class="sm:scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencie sua Empresa | BuffEats</title>
    <link rel="stylesheet" href="css/styleGerenciaProdutos.css">
    <script src="../../../globalAssets/js/animations.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen bg-cinzafundo">
    <header class="drop-shadow-xl text-fontecinza bg-branco relative top-0 z-10">
        <section
            class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
            <a href="#">
                <img src="../../../globalAssets/img/logo.png">
            </a>
            <div>
                <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer">
                    &#9776;
                </button>
                <nav class="hidden md:flex items-center space-x-3" aria-label="main">
                    <a href="#" class="text-lg font-medium">Home</a>
                    <a href="#" class="text-lg font-medium">Pedidos</a>
                    <a href="#" class="text-lg font-medium">Gerencie sua Empresa</a>
                    <a href="#" class="text-lg font-medium">Gerencie seus Produtos</a>
                    <a href="#" class="text-lg font-medium">Quem Somos</a>
                    <a href="#" id="empresa">
                        <img class="d" src="../../../globalAssets/img/empresa_p.png" alt="">
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
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Gerencie seus Produtos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90" id="empresa">
                    Perfil
                </a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Sair</a>
            </nav>
        </section>
    </header>

    <main class="mx-auto max-w-4xl flex justify-center items-center">
        <section class="backgroundContainer flex flex-col justify-center items-center">
            <div>
                <h2 class="text-3xl font-medium text-fontecinza text-center">Gerencie seus Produtos</h2>
                <p class="text-xl font-normal text-fontecinza text-center">Gerencie os Produtos que serão expostos aos
                    Clientes.</p>
            </div>
            <form action="" id="prod1" class="flex justify-start p-4 flex-col">
                <div class="my-4 sm:mx-4 pt-3">
                    <h2 class="text-2xl border-b-2 font-medium text-fontecinza">Produto 1:</h2>
                </div>
                <!-- Preço Unitário -->
                <div class="my-4 sm:mx-4">
                    <label for="preco" class="text-lg font-medium text-fontecinza">Preço Unitário:</label>
                    <input type="number" id="preco" name="preco" class="w-full border border-gray-300 rounded px-3 py-2"
                        placeholder="R$ 1,00" required>
                </div>
                <!-- Nome do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="nome" class="text-lg font-medium text-fontecinza">Nome do Produto</label>
                    <input type="text" id="nome" name="nome" class="w-full border border-gray-300 rounded px-3 py-2"
                        placeholder="Coxinha de frango:" required>
                </div>

                <!-- Imagem do Produto (100x100) -->
                <div class="my-4 sm:mx-4">
                    <label class="text-lg font-medium text-fontecinza">Foto do Produto</label>
                    <img src="https://cdn0.tudoreceitas.com/pt/posts/1/9/1/coxinha_simples_191_600.jpg"
                        alt="Imagem do Produto" class="w-24 h-24 object-cover" />
                </div>

                <!-- Foto do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="foto" class="text-lg font-medium text-fontecinza">Alterar Foto:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="w-full" required>
                </div>

                <!-- Botão de Envio -->
                <div class="my-4 sm:mx-4 text-center border-b-2 pb-3">
                    <button type="submit" class="redBtn">ALTERAR</button>
                </div>
            </form>

            <!-- Form Produto 2 -->
            <form action="" id="prod2" class="flex justify-start p-4 flex-col">
                <div class="my-4 sm:mx-4 pt-3">
                    <h2 class="text-2xl border-b-2 font-medium text-fontecinza">Produto 2:</h2>
                </div>
                <!-- Preço Unitário -->
                <div class="my-4 sm:mx-4">
                    <label for="preco" class="text-lg font-medium text-fontecinza">Preço Unitário:</label>
                    <input type="number" id="preco" name="preco" class="w-full border border-gray-300 rounded px-3 py-2"
                        placeholder="R$ 1,00" required>
                </div>
                <!-- Nome do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="nome" class="text-lg font-medium text-fontecinza">Nome do Produto</label>
                    <input type="text" id="nome" name="nome" class="w-full border border-gray-300 rounded px-3 py-2"
                        placeholder="Empada" required>
                </div>

                <!-- Imagem do Produto (100x100) -->
                <div class="my-4 sm:mx-4">
                    <label class="text-lg font-medium text-fontecinza">Foto do Produto</label>
                    <img src="https://www.sabornamesa.com.br/media/k2/items/cache/21615ff211c60b43d866a2b2bca320da_XL.jpg"
                        alt="Imagem do Produto" class="w-24 h-24 object-cover" />
                </div>

                <!-- Foto do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="foto" class="text-lg font-medium text-fontecinza">Alterar Foto:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="w-full" required>
                </div>

                <!-- Botão de Envio -->
                <div class="my-4 sm:mx-4 text-center border-b-2 pb-3">
                    <button type="submit" class="redBtn">ALTERAR</button>
                </div>
            </form>

        </section>
    </main>
</body>