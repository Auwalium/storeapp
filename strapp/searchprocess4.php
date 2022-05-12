




<?php
session_start();
include("config.php");

if(isset($_POST['search_submit'])){
  $code = $_POST['code'];
  $dispatchby = $_SESSION["username"];
  	

  $result = mysqli_query($mysqli, "DELETE FROM requestitem WHERE code = $code");
 if  (mysqli_query($mysqli, "DELETE FROM requestitem WHERE code = $code") === TRUE) 
 
 {
    echo "<br>Record deleted successfully";
} else {
    echo "<br>Error deleting record: " . $conn->error;
}

$conn->close();
  
  
 }


?>




<a href="ItemInfo.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



















