
<!--MySQLi Object-Oriented-->
<?php
// $servername = "sql213.byethost7.com";
// $username = "b7_26627836";
// $password = "1066emedear";
// $db_name = "b7_26627836_nsuk";

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


