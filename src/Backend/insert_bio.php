<?php
session_start();

require_once("conexao.php");


$descricao = $_POST['biografia'];
$fk_id_empresa = $_SESSION['id_empresa'];

$sql = "UPDATE CADASTRO_EMPRESA SET biografia = ? WHERE id_empresa = ?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conn->error);
}
$stmt->bind_param("si", $descricao, $fk_id_empresa);

if ($stmt->execute()) {
    header('Location: ../Views/confirmabiografia.php');
} else {
    echo "Erro ao inserir a biografia: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>