<header class="drop-shadow-xl text-fontecinza bg-branco relative top-0 z-10">
    <section
        class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
        <a href="#">
            <img src="img/logo.png">
        </a>
        <div>
            <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer">
                &#9776;
            </button>
            <nav class="hidden md:flex items-center space-x-3" aria-label="main">
                <a href="home-empresa.php" class="text-lg font-medium">Home</a>

                <div class="dropdown">
                    <a href="#" tabindex="0" class="text-lg font-medium">Pedidos</a>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="#">Em andamento</a></li>
                        <li><a href="#">Concluídos</a></li>
                    </ul>
                </div>
                <a href="gerenciaEmpresa.php" class="text-lg font-medium">Gerencie sua empresa</a>
                <a href="adicionarProdutos.php" class="text-lg font-medium">Adicionar produtos</a>
                <a href="gerenciaProdutos.php" class="text-lg font-medium">Gerenciar produtos</a>
                <a href="perfilEmpresa.php" id="empresa">
                    <img class="d" src="img/empresa_p.png" alt="">
                </a>
                <a href="../Backend/logout_session.php" class="text-lg text-vermelho font-medium">Sair</a>
            </nav>
        </div>
    </section>
    <section id="mobile-menu"
        class="absolute top-0 bg-branco w-full text-3xl flex-col justify-content-center origin-top animate-open-menu hidden">
        <button class="text-8xl self-end px-6">
            &times;
        </button>
        <nav class="flex flex-col min-h-screen items-center py-8" aria-label="mobile">
            <a href="home-empresa.php" class="w-full text-center p-6 hover:opacity-90">Home</a>

            <a href="#" tabindex="0" class="w-full text-center p-6 hover:opacity-90">Pedidos em andamento</a>
            <a href="#" tabindex="0" class="w-full text-center p-6 hover:opacity-90">Pedidos em concluídos</a>
            

            <a href="gerenciaEmpresa.php" class="w-full text-center p-6 hover:opacity-90">Gerencie sua empresa</a>
            <a href="adicionarProdutos.php" class="w-full text-center p-6 hover:opacity-90">Adicionar produtos</a>
            <a href="gerenciaProdutos.php" class="w-full text-center p-6 hover:opacity-90">Gerenciar produtos</a>
            <a href="perfilEmpresa.php" class="w-full text-center p-6 hover:opacity-90" id="empresa">
                Perfil
            </a>
            <a href="../Backend/logout_session.php" class="w-full text-center p-6 hover:opacity-90">Sair</a>
        </nav>
    </section>
</header>