<?php
$servername = "localhost";
$database = "menu";
$username = "CH40";
$password = "Pa$$w0rd";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>