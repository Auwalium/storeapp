<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$descrip = mysqli_real_escape_string($mysqli, $_POST['descrip']);
	$quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);
	$cprice = mysqli_real_escape_string($mysqli, $_POST['cprice']);
    $swy = mysqli_real_escape_string($mysqli, $_POST['swy']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$ddate = mysqli_real_escape_string($mysqli, $_POST['ddate']);
	 
		
		
		$result = mysqli_query($mysqli, "INSERT INTO applyitem(name,descrip,quantity,cprice,swy,dept,ddate) 
		VALUES('$name','$descrip','$quantity','$cprice','$swy','$dept','$ddate')");
		
		//display success message
		echo "<font color='green'>You Have successfully submitted your item request. Management will be communicated.";
		
		
		
	
	
	
}
?>
</br>
</br>
</br>
</br>
<a href="users.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="http:/localhost/cittu/logout.php" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="report.html" style="color:crimson; font-weight:normal; text-shadow:1px 2px black; text-decoration:none;">Report </a>
</body>
</html>
