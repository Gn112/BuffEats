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
    <link rel="stylesheet" href="css/styleAdicionarProdutos.css">
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
                    <a href="../../../home/Empresa/home-empresa.php" class="text-lg font-medium">Home</a>
                    <a href="#" class="text-lg font-medium">Pedidos</a>
                    <a href="../GerenciaEmpresa/gerenciaEmpresa.php" class="text-lg font-medium">Gerencie sua Empresa</a>
                    <a href="#" class="text-lg font-medium">Adicionar Produtos</a>
                    <a href="#" class="text-lg font-medium">Quem Somos</a>
                    <a href="../profile.php" id="empresa">
                        <img class="d" src="../../../globalAssets/img/empresa_p.png" alt="">
                    </a>
                    <a href="../../logout_session.php" class="text-lg text-vermelho font-medium">Sair</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu"
            class="absolute top-0 bg-branco w-full text-3xl flex-col justify-content-center origin-top animate-open-menu hidden">
            <button class="text-8xl self-end px-6">
                &times;
            </button>
            <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
                <a href="../../../home/Empresa/home-empresa.php" class="w-full text-center p-6 hover:opacity-90">Home</a>
                <a href="../GerenciaEmpresa/gerenciaEmpresa.php" class="w-full text-center p-6 hover:opacity-90">Pedidos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Gerencie sua Empresa</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Adicionar Produtos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
                <a href="../profile.php" class="w-full text-center p-6 hover:opacity-90" id="empresa">
                    Perfil
                </a>
                <a href="../../logout_session.php" class="w-full text-center p-6 hover:opacity-90">Sair</a>
            </nav>
        </section>
    </header>

    <main class="mx-auto max-w-4xl flex justify-center items-center">
        <section class="backgroundContainer flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center">
                <img class="w-60 h-60 sm:w-40 sm:h-40 object-cover" src="../../../globalAssets/img/pizza_g.png">
                <h2 class="text-3xl font-medium text-fontecinza text-center">Adicione seus Produtos</h2>
                <p class="text-xl font-normal text-fontecinza text-center">Adicione os Produtos que serão expostos aos Clientes.</p>
            </div>
            <form method="post" onsubmit="return validateForm()"  id="prod1" class="flex justify-start p-4 flex-col" action= "produtoadd.php" enctype="Multipart/form-data">
                <!-- Preço Unitário -->
                <div class="my-4 sm:mx-4">
                    <label for="preco" class="text-lg font-medium text-fontecinza">Preço Unitário:</label>
                    <input maxlength="6" id="preco" onkeypress="return /^[0-9]*$/.test(event.key)" oninput="formatarMoeda(this)" type="text" name="preco" class="w-full border border-gray-300 rounded px-3 py-2"
                        placeholder="R$ 1,00" required>
                </div>
                <!-- Nome do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="nome" class="text-lg font-medium text-fontecinza">Nome do Produto</label>
                    <input type="text" id="nome_produto" onkeypress="return /^[A-Z a-z]*$/.test(event.key)" name="nome"  class="w-full border border-gray-300 rounded px-3 py-2" maxlength="100"
                        placeholder="Coxinha de frango" required>
                </div>

                <!-- Foto do Produto -->
                <div class="my-4 sm:mx-4">
                    <label for="foto" class="text-lg" font-medium text-fontecinza>Adicionar Foto:</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="w-full" required>
                </div>

                <!-- Botão de Envio -->
                <div class="my-4 sm:mx-4 text-center pb-3">
                    <button  type="submit" onclick="validateForm()" name="submit" class="redBtn">ADICIONAR</button>
                </div>
                <script>
                        function validateForm() {
                        var Preco = document.getElementById('preco').value;
                        var Nome_Produto = document.getElementById('nome_produto').value;

                        if (Preco.trim() === ''){
                            alert('Por favor, preencha o campo Preço Unitário.');
                            return false;
                        }

                        if (Preco <= "0.00"){
                            alert('Por favor, preencha o campo com um valor válido.');
                            return false;
                        }

                        if (Nome_Produto.trim() === '') {
                            alert('Por favor, preencha o campo Nome do Produto.');
                            return false;
                        }
                        
                        return true;
                        }

                        function formatarMoeda(input) {
                        var valor = input.value.replace(/\D/g, ''); // Remove todos os caracteres não numéricos
                        valor = (parseInt(valor) / 100).toFixed(2); // Divide por 100 e fixa 2 casas decimais

                        // Formata a representação de moeda
                        var valorFormatado =  valor.replace('.', '.');

                        // Atualiza o campo de entrada com o valor formatado
                        input.value = valorFormatado;
                        }

                </script>
            </form>

        </section>
    </main>
</body>