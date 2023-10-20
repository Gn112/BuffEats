<?php
// Conexão com o BD
ini_set('error_reporting', 'E_STRICT');
$servername = "35.225.119.62";
$username = "root";
$password = "COTemig123";
$dbname = "Buffeats";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Atribuição a partir da barra de pesquisa
$pesquisa = $_POST['pesquisa'];

// Função de pesquisa -- BARRA DE PESQUISA
function listarRegistros($conn, $palavra)
{
    $sql = mysqli_query($conn, "SELECT * FROM resultados_busca WHERE PRODUTO LIKE '%$palavra%';");

    return $resultados = mysqli_fetch_all($sql, MYSQLI_ASSOC);


    // Verifique se a preparação da consulta foi bem-sucedida
    if ($resultados === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Verifique se a vinculação foi bem-sucedida
    if ($resultados === false) {
        die("Erro na vinculação dos parâmetros: " . $resultados->error);
    }
    $conn->close();
}


// Função de pesquisa -- FILTRO
function listarRegistrosFiltro($conn, $filtro)
{
    $sql = mysqli_query($conn, "SELECT * FROM resultados_busca WHERE CATEGORIA = $filtro;");

    return $resultados = mysqli_fetch_all($sql, MYSQLI_ASSOC);


    // Verifique se a preparação da consulta foi bem-sucedida
    if ($resultados === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Verifique se a vinculação foi bem-sucedida
    if ($resultados === false) {
        die("Erro na vinculação dos parâmetros: " . $resultados->error);
    }
    $conn->close();
}

$codfiltro=0;

for($c = 1; $c <= 6; $c++){
    if (isset($_POST["flt$c"]) == true) {
        $codfiltro=$c;
    }
    
}

if ($codfiltro != 0) {
    $resultados = listarRegistrosFiltro($conn, $codfiltro);
} else {
    $resultados = listarRegistros($conn, $pesquisa);
}

?>