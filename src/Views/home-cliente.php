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
    <link rel="stylesheet" href="css/homeCliente.css">
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <script src="js/animations.js" defer></script>
    <script src="../../node_modules/feather-icons/dist/feather.js"></script>
</head>

<body class="min-h-screen bg-cinzafundo">
    <header class="drop-shadow-xl text-fontecinza bg-branco sticky top-0 z-10">
        <section class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
            <a href="home-cliente.php">
                <img src="img/logo.png">
            </a>
            <div>
                <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer">
                    &#9776;
                </button>
                <nav class="hidden md:flex items-center space-x-3" aria-label="main">
                    <a href="#" class="text-lg font-medium text-decoration-none text-body-secondary">Home</a>
                    <!-- <a href="#" class="text-lg font-medium text-decoration-none text-body-secondary">Pedidos</a> -->
                    <!-- <a href="#" class="text-lg font-medium text-decoration-none text-body-secondary">Quem Somos</a> -->
                    <a href="perfilCliente.php" id="cliente">
                        <img class="d" src="img/cliente_p.png" alt="">
                    </a>
                    <a href="../Backend/logout_session.php" class="text-lg text-vermelho font-medium text-decoration-none text-body-danger">Sair</a>
                </nav>
            </div>
        </section>
        <section id="mobile-menu" class="absolute top-0 bg-branco w-full text-3xl flex-col justify-content-center origin-top animate-open-menu hidden">
            <button class="text-8xl self-end px-6">
                &times;
            </button>
            <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Home</a>
                <!-- <a href="#" class="w-full text-center p-6 hover:opacity-90">Pedidos</a> -->
                <a href="#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
                <a href="perfilCliente.php" class="w-full text-center p-6 hover:opacity-90" id="cliente">
                    Perfil
                </a>

                <a href="../Backend/logout_session.php" class="w-full text-center p-6 hover:opacity-90">Sair</a>
            </nav>
        </section>
    </header>

    <main class="min-h-screen">

        <!-- Carrossel/Div de filtros -->
        <div class="rounded-b-lg w-full bg-branco sm:shadow-2xl carousel z-[1] fixed md:flex md:justify-around md:bg-cinzafundo md:shadow-none md:relative md:m-0">
            <div class="carousel-item p-1.5">
                <button class="btn bg-branco text-cinzafonte" onclick="my_modal_5.showModal()">
                    <i data-feather="map-pin" class="stroke-vermelho"></i>
                    Localidades
                    <i data-feather="chevron-down" class="stroke-2"></i>
                </button>
                <!-- HTML do modal das localidades -->
                <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">
                            <i data-feather="map-pin" class="stroke-vermelho"></i>
                            Localidades
                        </h3>

                        <!-- Conteúdo do modal -->
                        <p class="py-4">
                            Aqui vão estar as coisas da localidade
                        </p>

                        <!-- Botão pra filtrar/fechar modal -->
                        <div class="modal-action">
                            <form method="dialog">
                                <!-- if there is a button in form, it will close the modal -->
                                <button class="btn">Filtrar</button>
                            </form>
                        </div>

                    </div>
                </dialog>

            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i><img src="img/baby.svg" class="w-[20px] stroke-vermelho"></i>
                    Chá de Bebê
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i data-feather="briefcase" class="stroke-vermelho"></i>
                    Empresarial
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i><img src="img/birthday.svg" class="w-[20px] stroke-vermelho"></i>
                    Aniversário
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i><img src="img/casamento.svg" class="w-[20px] stroke-vermelho"></i>
                    Casamento
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i data-feather="home" class="stroke-vermelho"></i>
                    Familiar
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i><img src="img/crianca-boneco" class="w-[20px] stroke-vermelho"></i>
                    Infantil
                </button>
            </div>

            <div class="carousel-item p-1.5">
                <button class="btn whiteBtn">
                    <i><img src="img/formatura.svg" class="w-[20px] stroke-vermelho"></i>
                    Formatura
                </button>
            </div>
        </div>

        <div id="divider" class="relative p-10 bg-cinzafundo md:hidden"></div>

        <!-- Empresas destaque -->
        <div class="w-full bg-cinzafundo carousel z-[1]">
            
            <div class="carousel-item bg-cinzafundo p-2">
                <div class="card w-80 bg-base-100 shadow-xl m-2">
                    <div class="card-body p-6 flex flex-row gap-5">
                        <figure><img src="img/empresa_g_q.png" class="w-[40px]" /></figure>
                        <div class="flex flex-col justify-center">
                            <h2>Lorem Ipsun Buffet</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-cinzafundo p-2">
                <div class="card w-80 bg-base-100 shadow-xl m-2">
                    <div class="card-body p-6 flex flex-row gap-5">
                        <figure><img src="img/empresa_g_q.png" class="w-[40px]" /></figure>
                        <div class="flex flex-col justify-center">
                            <h2>Lorem Ipsun Buffet</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-cinzafundo p-2">
                <div class="card w-80 bg-base-100 shadow-xl m-2">
                    <div class="card-body p-6 flex flex-row gap-5">
                        <figure><img src="img/empresa_g_q.png" class="w-[40px]" /></figure>
                        <div class="flex flex-col justify-center">
                            <h2>Lorem Ipsun Buffet</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-cinzafundo p-2">
                <div class="card w-80 bg-base-100 shadow-xl m-2">
                    <div class="card-body p-6 flex flex-row gap-5">
                        <figure><img src="img/empresa_g_q.png" class="w-[40px]" /></figure>
                        <div class="flex flex-col justify-center">
                            <h2>Lorem Ipsun Buffet</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-cinzafundo p-2">
                <div class="card w-80 bg-base-100 shadow-xl m-2">
                    <div class="card-body p-6 flex flex-row gap-5">
                        <figure><img src="img/empresa_g_q.png" class="w-[40px]" /></figure>
                        <div class="flex flex-col justify-center">
                            <h2>Lorem Ipsun Buffet</h2>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>

        <!-- Grid das empresas -->
        <div class="grid bg-cinzafundo sm:grid-cols-2 lg:grid-cols-4 justify-items-center gap-6 m-4 mx-20">

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl">
                <figure><img
                        src="https://www.folhavitoria.com.br/geral/blogs/portugues-em-dia/wp-content/uploads/2020/12/69.-Bufe.jpg"
                        alt="Shoes" /></figure>
                <div class="card-body">
                    <div class="card-title text-fontecinza flex justify-between">
                        Bufê Maravilha
                        <div class="rating">
                            <div class="flex gap-1.5">
                                <p>5,0</p>
                                <input type="radio" name="rating-2" class="mask mask-star-2 bg-amarelo" checked />
                            </div>
                        </div>
                    </div>
                    <p class="text-fontecinza">*Descrição*</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-info">Infantil</div>
                        <div class="badge badge-success">Chá de bebê</div>
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