<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    html,
    body {
        margin: 0;
        height: 100%;
        /* Garante que o body e o html ocupem toda a tela */
        color: var(--color-fontecinza);
    }

    body {
        background-color: var(--color-cinzafundo);
        background: url(img/onda_fundo.svg);
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: contain;
    }
</style>

<body>
    <?php
    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

    ?>
</body>

</html>