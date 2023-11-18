<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
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
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/homeEmpresa.css">
    <script src="js/animations.js" defer></script>

</head>

<body class="min-h-screen bg-cinzafundo">
    <?php require_once("headers/_headerEmpresa.php") ?>

    <main class="min-h-screen flex place-content-center">
        <div class="backgroundContainer bg-cinzafundo flex flex-col gap-6">
            <!-- Pedidos (todos) -->
            <div>
                <div class="md:flex flex-col gap-4 items-center">
                    <div class="text-center">
                        <h1 class="titulo m-3 sm:m-0 text-2xl md:text-4xl">Pedidos</h1>
                    </div>
                    <!-- Tabelo -->
                    <div class="overflow-x-auto md:w-9/12">
                        <table class="table bg-branco p-1 rounded-md shadow-xl">
                            <!-- head -->
                            <thead>
                                <tr>
                                    <th class="text-lg font-medium">Prazo</th>
                                    <th class="text-lg font-medium">Código do pedido</th>
                                    <th class="text-lg font-medium">Valor total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Aqui vai ter o loop dos pedidos -->
                                <tr>
                                    <td class="text-lg">11/11/2011</td>
                                    <td class="text-lg">00001</td>
                                    <td class="text-center text-lg">30,00</td>
                                    <td class="">
                                        <button class="redBtn w-full h-full m-0 p-0">Detalhes</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        feather.replace();
    </script>
</body>

</html>