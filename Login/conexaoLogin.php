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

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM CADASTRO_CLIENTE WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);