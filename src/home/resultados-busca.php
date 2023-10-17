<?php
    $servername = "35.225.119.62";
    $username = "root";
    $password = "COTemig123";
    $dbname = "Buffeats";
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    $pesquisa = $_POST['pesquisa'];
    
function listarRegistros($conn, $palavra){
    $sql = mysqli_query($conn,"SELECT * FROM resultados_busca WHERE PRODUTO LIKE '%$palavra%';");

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
    
    $resultados = listarRegistros($conn, $pesquisa);
    
    

?>