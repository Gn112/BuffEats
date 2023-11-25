<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');

?>

<!DOCTYPE html>
<html lang="pt-br" class="sm:scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | BuffEats</title>
    <link rel="stylesheet" href="css/catalogoCliente.css">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <script src="js/animations.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="../../node_modules/feather-icons/dist/feather.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<!-- 
    Recados do Siri:
    - Acredito que essa página será acessada ao clicar em um dos cards das empresas na tela Home-Cliente
    - Adicionar tag 'forms' no lugar mais fácil pra vcss
    - Necessário criar código JS nos botões '+' e '-' das tabelas pra aumentar a quantidade dos pedidos
    - Me chamar se precisar adicionar um novo elemente que altere alguma classe de estilo
 -->

<body class="min-h-screen bg-cinzafundo">
    <!-- Chama a header de um arquivo separado -->
    <?php require_once('headers/_headerDeslogado.php'); ?>

    <main class="min-h-screen flex place-content-center">
        <div class="backgroundContainer flex flex-col gap-6">
            <!-- Informações da empresa -->
            <div class="hero">
                <div
                    class="hero-content flex flex-col p-10 justify-center items-center text-center gap-3 md:flex-row md:justify-start md:items-start md:text-start">
                    <!-- Imagem -->
                    <img class="object-cover rounded-2xl w-36 h-36 md:w-64 md:h-64" src="img/saulacakes.jpg" alt="">

                    <!-- Textos -->
                    <div class="flex flex-col gap-4">
                        <div>
                            <h1 class="titulo text-2xl md:text-4xl">Saula Cakes</h1>
                        </div>

                        <div>
                            <span class="subtitulo md:text-2xl">
                                Especializações:
                                <div class="badge font-semibold text-md badge-primary">Confeitaria</div>
                                <div class="badge font-semibold text-md badge-info">Doces</div>
                                <div class="badge font-semibold text-md badge-neutral">Bolos</div>
                            </span>
                        </div>

                        <div>
                            <p class="subtitulo break-all md:text-2xl">Especialista em confeitaria em Belo Horizonte.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Produtos -->
            <div>
                <div class="flex flex-col gap-4 items-center">
                    <div class="text-center">
                        <h1 class="titulo text-2xl md:text-4xl">Produtos</h1>
                    </div>
                    <!-- Tabelo -->
                    <div class="overflow-x-auto md:w-9/12">
                        <table class="table bg-branco p-1 rounded-md shadow-xl">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th>Produto</th>
                                    <th>Valor Unitário</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Aqui vai ter o loop dos produtos -->
                                <tr>
                                    <td class="text-lg">Bombom de Brigadeiro</td>
                                    <td class="text-center text-lg">R$ 4.00</td>
                                    <td class="flex flex-col items-center md:flex-row gap-3">

                                        <button id="min_1" onclick="decrementaValor(1)" class="bg-vermelho text-white rounded-lg w-8 h-8">-</button>
                                        <input id="produto1" class="text-center text-lg border rounded-md"
                                            type="number" name="quantidade" value="0" min="0" max="999">
                                        <button id="plus_1" onclick="incrementaValor(1)" class="bg-green-500 text-white rounded-lg w-8 h-8">+</button>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-lg">Bombom de Ninho com Frutas Vermelhas</td>
                                    <td class="text-center text-lg">R$ 4.00</td>
                                    <td class="flex flex-col items-center md:flex-row gap-3">
                                        <button id="min_2" onclick="decrementaValor(2)" class="bg-vermelho text-white rounded-lg w-8 h-8">-</button>
                                        <input id="produto2" class="text-center text-lg border rounded-md"
                                            type="number" name="quantidade" value="0" min="0" max="999">
                                        <button id="plus_2" onclick="incrementaValor(2)" class="bg-green-500 text-white rounded-lg w-8 h-8">+</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-lg">Bombom de Nozes</td>
                                    <td class="text-center text-lg">R$ 4.00</td>
                                    <td class="flex flex-col items-center md:flex-row gap-3">

                                        <button id="min_3" onclick="decrementaValor(3)" class="bg-vermelho text-white rounded-lg w-8 h-8">-</button>
                                        <input id="produto3" class="text-center text-lg border rounded-md"
                                            type="number" name="quantidade" value="0" min="0" max="999" />
                                        <button id="plus_3" onclick="incrementaValor(3)"
                                            class="bg-green-500 text-white rounded-lg w-8 h-8">+</button>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <hr class="bg-fontecinza">
            <!-- Finalização -->
            <div class="flex flex-col text-center gap-3 md:justify-between items-center">
                <div>
                    <span class="text-fontecinza md:text-xl">Total:</span>
                    <span id="totalPedido" class="text-fontecinza font-bold md:text-xl">R$0,00</span>
                </div>
                <button class="redBtn btn" onclick="confirmaPedido()">REALIZAR PEDIDO</button>
            </div>
        </div>
    </main>

    <script>

    </script>

    <!-- Script da biblioteca de modals -->
    <script src="js/sweetalert2.js"></script>
</body>

</html>