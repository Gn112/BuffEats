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
    <title>Gerencie sua Empresa | BuffEats</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="css/styleGerencia.css">
    <script src="js/animations.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-screen bg-cinzafundo">


    <main class="mx-auto max-w-4xl flex justify-center items-center" >
        <section class="backgroundContainer flex flex-col justify-center items-center">
            <div>
                <h2 class="text-3xl font-medium text-fontecinza text-center">Gerencie sua Empresa</h2>
                <p class="text-xl font-normal text-fontecinza text-center">Gerencie as informações que serão expostas
                    aos Clientes.</p>
            </div>
            <div>
                <img class="logo" src="img/empresa_g.png" alt="" srcset="">
            </div>
            <form method="post" onsubmit="return validateForm()" id="formGerencia" class="flex flex-col justify-start" class="formulario" action="../Backend/insert_bio.php">
                <!-- <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-2">
                    <label for="nome"   class="block text-lg font-medium text-fontecinza ">Nome:</label>
                    <input type="text" onkeypress="return /^[A-Z/a-z]*$/.test(event.key)" id="full_name"  name="full_name" rows="4"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div> -->
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-2">
                    <label for="biografia" class="block text-lg font-medium text-fontecinza ">Biografia:</label>
                    <textarea id="biografia" name="biografia" rows="4"
                        class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 px-4 py-6 text-center">
                    <input type="submit" class="redBtn" value="ALTERAR" onclick="validateForm()" name="submit">
                    
                </div>
                    <script>
                        function validateForm() {
                            // var fullName = document.getElementById('full_name').value;
                            var Biografia = document.getElementById('biografia').value;
                            // Validação dos campos
                            // if (fullName.trim() === '') {
                            // alert('Por favor, preencha o campo Nome.');
                            // return false;
                            // }

                            if (Biografia.trim() === '') {
                            alert('Por favor, preencha o campo Biografia.');
                            return false;
                            }

                            return true;
                            }
                    </script>
            </form>
        </section>
    </main>
</body>