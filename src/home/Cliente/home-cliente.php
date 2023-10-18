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
    <title>Perfil | BuffEats</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="../../globalAssets/js/animations.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="min-h-screen bg-cinzafundo">
    <header class="drop-shadow-xl text-fontecinza bg-branco sticky top-0 z-10">
        <section class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
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
                    <!-- <a href="#" class="text-lg font-medium">Quem Somos</a> -->
                    <a href="../../Perfil/PerfilCliente/profile.php" id="cliente">
                        <img class="d" src="../../globalAssets/img/cliente_p.png" alt="">
                    </a>
                    <a href="../logout_session.php" class="text-lg text-vermelho font-medium">Sair</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu" class="absolute top-0 bg-branco w-full text-3xl flex-col justify-content-center origin-top animate-open-menu hidden">
            <button class="text-8xl self-end px-6">
                &times;
            </button>
            <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Home</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Pedidos</a>
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
                <a href="../../Perfil/PerfilCliente/profile.php" class="w-full text-center p-6 hover:opacity-90" id="cliente">
                    Perfil
                </a>

                <a href="../logout_session.php" class="w-full text-center p-6 hover:opacity-90">Sair</a>
            </nav>
        </section>
    </header>

    <!-- Corpo -->
    <main class="container-md  ">
        <!-- Pesquisa -->
        <div class="d-inline-flex justify-content-center w-100 mt-5">
            <form method="POST" class="d-inline-flex w-100 input-group input-group-lg shadow">
                <button type="submit" name="search" class="input-group-text rounded-end rounded-start-3 rounded-end-0 shadow-sm" id="basic-addon1" aria-describedby="inputGroup-sizing-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" /></svg></button>
                <input type="text" placeholder="Qual comida você precisa?" name="pesquisa" class="form-control w-75 rounded-end rounded-end-3 rounded-start-0" aria-describedby="inputGroup-sizing-lg">

            </form>
        </div>
        <!-- Filtros -->
        <div class="mt-4 mb-4 d-flex justify-content-between">
            <button type="button" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis d-flex align-items-center">Filtros &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                    <path d="M1.94043 13.2027V11.8338H6.52381V13.2027H1.94043ZM1.94043 9.04011V7.67119H10.7965V9.04011H1.94043ZM1.94043 4.85979V3.48662H15.0735V4.85979H1.94043Z" fill="#9A8282" />
                </svg></button>
            <button type="button" name="1" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Festa infantil</button>
            <button type="button" name="2" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Chá revelação</button>
            <button type="button" name="3" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Empresarial</button>
            <button type="button" name="4" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Festa familiar</button>
            <button type="button" name="5" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Bodas</button>
            <button type="button" name="6" class="btn btn-light bg-white shadow p-2 ps-4 pe-4 text-danger-emphasis">Aniversário</button>
        </div>
        <!-- Empresas sugeridas -->
        <div class="container-lg d-flex justify-content-between">
            <div class="container d-flex bg-white p-3 rounded shadow" style="width: 18rem;">
                <img src="img/logo_empresa.svg" alt="" width="80px">
                <div class="container d-flex flex-column">
                    <span>Nome da empresa</span>
                    <span>Buffet</span>
                </div>
            </div>
            <div class="container d-flex bg-white p-3 rounded shadow" style="width: 18rem;">
                <img src="img/logo_empresa.svg" alt="" width="80px">
                <div class="container d-flex flex-column">
                    <span>Nome da empresa</span>
                    <span>Buffet</span>
                </div>
            </div>
            <div class="container d-flex bg-white p-3 rounded shadow" style="width: 18rem;">
                <img src="img/logo_empresa.svg" alt="" width="80px">
                <div class="container d-flex flex-column">
                    <span>Nome da empresa</span>
                    <span>Buffet</span>
                </div>
            </div>
            <div class="container d-flex bg-white p-3 rounded shadow" style="width: 18rem;">
                <img src="img/logo_empresa.svg" alt="" width="80px">
                <div class="container d-flex flex-column">
                    <span>Nome da empresa</span>
                    <span>Buffet</span>
                </div>
            </div>
        </div>
        <!-- Resultados de busca -->

        <?php
        require("../resultados-busca.php");
        ?>
        <table class="table table-light table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">IMAGEM</th>
                    <th scope="col">PRODUTO</th>
                    <th scope="col">VALOR UNITÁRIO</th>
                    <th scope="col">EMPRESA</th>
                    <th scope="col">CONTATO</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CEP</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($resultados as $resultado) : ?>
                    <tr>
                        <td><?php echo $resultado['IMAGEM'] ?></td>
                        <td><?php echo $resultado['PRODUTO']; ?></td>
                        <td><?php echo $resultado["VALOR UNITÁRIO"]; ?></td>
                        <td><?php echo $resultado['EMPRESA'] ?></td>
                        <td><?php echo $resultado['CONTATO'] ?></td>
                        <td><?php echo $resultado['EMAIL'] ?></td>
                        <td><?php echo $resultado['CEP'] ?></td>
                    </tr>


                <?php endforeach;
                ?>
            </tbody>
        </table>
    </main>


</body>

</html>