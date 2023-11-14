<?php
session_start();

// Conecta ao banco de dados
require_once("conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$fk_id_empresa = $_SESSION['id_empresa'];
if ($_FILES["foto"]["error"] == 0) {
    $imagem = file_get_contents($_FILES["foto"]["tmp_name"]);
} else {
    // Trate o erro de upload aqui, se necessário
    $imagem = null;
}

// Lidar com o upload da imagem (este é um exemplo básico, você pode aprimorá-lo)


$sql = "INSERT INTO PRODUTOS_EMPRESA (nome, preco, imagem, fk_id_empresa) VALUES ( ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Verifique se a preparação da consulta foi bem-sucedida
if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}

// Vincule os parâmetros corretamente
$stmt->bind_param("sdbi", $nome, $preco, $imagem, $fk_id_empresa);

// Verifique se a vinculação foi bem-sucedida
if ($stmt === false) {
    die("Erro na vinculação dos parâmetros: " . $stmt->error);
}

if ($stmt->execute()) {
    header('Location: ../Views/confirmaProduto.php');
} else {
    echo "Erro ao inserir produto: " . $stmt->error;
}

$stmt->close();
$conn->close();
