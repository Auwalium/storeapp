
<!--MySQLi Object-Oriented-->
<?php
$servername = "localhost";
$username = "emedion";
$password = "Password@1";
$db_name = "inventory2";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $db_name); 
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected </br>";
?>


