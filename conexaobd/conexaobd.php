<?php
ini_set('default_charset', 'utf-8');
?>

<?php
$servername = "34.95.153.229";
$database = "buffeat";
$username = "root";
$password = "COTemig123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

	
	# Check If Record Exists
	
	$sql = "INSERT INTO CADASTRO_CLIENTE (id_cliente, nome_completo , CPF, celular, CEP, email, senha, opcao_pagamento
    ) VALUES (default, 'Carlos', 43742293995111, 319949065321111, 121629901,'email@hotmail.com', 'abc123', 1)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>