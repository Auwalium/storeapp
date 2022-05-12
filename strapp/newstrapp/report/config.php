<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'emedion');
define('DB_PASSWORD', 'Password@1');
define('DB_NAME', 'inventory2');

/* Attempt to mysqlinect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check mysqlinection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
