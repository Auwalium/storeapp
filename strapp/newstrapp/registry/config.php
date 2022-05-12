<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql213.byethost7.com');
define('DB_USERNAME', 'b7_26627836');
define('DB_PASSWORD', '1066emedear');
define('DB_NAME', 'b7_26627836_nsuk');

 
/* Attempt to mysqlinect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check mysqlinection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
