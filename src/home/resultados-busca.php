<?php
    $servername = "35.225.119.62";
    $username = "root";
    $password = "COTemig123";
    $dbname = "Buffeats";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }
    
    $pesquisa = $_POST['pesquisa'];
    
function listarRegistros($conn, $palavra){
    $sql = "SELECT * FROM resultados_busca WHERE PRODUTO LIKE '%$palavra%';";

    $stmt = $conn->query($sql);

    // Verifique se a preparação da consulta foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Verifique se a vinculação foi bem-sucedida
    if ($stmt === false) {
        die("Erro na vinculação dos parâmetros: " . $stmt->error);
    }
    
   
}
    
    $resultados = listarRegistros($conn, $pesquisa);
    
    $stmt->close();
    $conn->close();

?>