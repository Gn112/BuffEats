<?php
ini_set('default_charset', 'utf-8');
?>

<?php
$servername = "34.136.11.187";
$database = "Buffeats";
$username = "root";
$password = "COTemig123";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




}





?>
