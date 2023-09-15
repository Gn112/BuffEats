<?php
session_start();

$servername = "35.225.119.62";
$username = "root";
$password = "COTemig123";
$dbname = "Buffeats";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$nome = $_POST['full_name'];
$descricao = $_POST['biografia'];
$fk_id_empresa = $_SESSION['id_empresa'];

$sql = "    INSERT INTO DESCRICAO_EMPRESA(descricao, fk_id_empresa)
            VALUES(?, ?);
            
            UPDATE CADASTRO_EMPRESA
            SET nome_empresa = '?'
            WHERE id_empresa = ?;
            ";
 $stmt = $conn->prepare($sql);
  // Verifique se a preparação da consulta foi bem-sucedida
  if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

 // Verifique se a preparação da consulta foi bem-sucedida
 if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

// Vincule os parâmetros corretamente
$stmt->bind_param("sdbi", $descricao, $fk_id_empresa, $nome, $fk_id_empresa);

// Verifique se a vinculação foi bem-sucedida
if ($stmt === false) {
    die("Erro na vinculação dos parâmetros: " . $stmt->error);
}

if ($stmt->execute()) {
    echo "Biografia e nome adicionados com sucesso!";
} else {
    echo "Erro ao inserir biografia e/ou nome: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>