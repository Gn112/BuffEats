<header class="drop-shadow-xl text-fontecinza bg-branco sticky top-0 z-10">
    <section
        class="max-w-full mx-auto p-6 flex justify-between itens-center md:flex md:items-center md:justify-between">
        <a href="">
            <img src="img/logo.png">
        </a>
        <div>
            <button id="hamburger-button" class="text-3xl md:hidden cursor-pointer">
                &#9776;
            </button>
            <nav class="hidden md:flex items-center space-x-3" aria-label="main">
                <a href="#" class="text-lg font-medium text-decoration-none text-body-secondary">Home</a>
                <a href="../../index.php" class="text-lg font-medium text-decoration-none text-body-secondary">Quem Somos</a>
                <a href="#" class="redBtn" id="entrar">Entrar</a>
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
            <a href="../../index.php#" class="w-full text-center p-6 hover:opacity-90">Quem Somos</a>
            <a href="#" class="w-full text-center p-6 hover:opacity-90" id="entrar">Entrar</a>
        </nav>
    </section>
</header>