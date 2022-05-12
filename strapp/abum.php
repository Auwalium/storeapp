<?php ini_set('display_errors', 0); ?> 
<?php

$localhost = "localhost";

$username = "emedion";

$password = "Password";

$dbname = "inventory";

$con = new mysqli($localhost, $username, $password, $dbname);

if( $con->connect_error){

    die('Error: ' . $con->connect_error);

}

//$sql = "SELECT * FROM users";

if( isset($_GET['search']) ){

    $rname = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
     $dept = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));


    $sql = "SELECT * FROM requestitem WHERE rname ='$rname'  or dept='$dept'";

}

$result = $con->query($sql);

?>