<?php
session_start();
include_once("conexao.php");
$id_cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_NUMBER_INT);
$nome_completo = filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_CADASTRO_CLIENTE = "UPDATE CADASTRO_CLIENTE SET nome_completo='$nome_completo', email='$email', celular='$celular', senha='$senha' WHERE id_cliente='$id_cliente'";
$resultado_CADASTRO_CLIENTE = mysqli_query($conn, $result_CADASTRO_CLIENTE);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: profile.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: profile.php?id_cliente=$id_cliente");
}
