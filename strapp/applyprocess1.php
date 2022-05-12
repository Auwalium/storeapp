<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");


if(isset($_POST['Submit'])) {

	$name           = mysqli_real_escape_string($mysqli, $_POST['name']);
	$quantity       = mysqli_real_escape_string($mysqli, $_POST['quantity']);
	$phone           = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$dept           = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$rname           = mysqli_real_escape_string($mysqli, $_POST['rname']);
	$rdate          = mysqli_real_escape_string($mysqli, $_POST['rdate']);
	
	$result = mysqli_query($mysqli, "INSERT INTO requestitem(name, quantity,phone,dept,rname,rdate) 
		VALUES('$name','$quantity','$phone','$dept','$rname','$rdate')");
		
		$result = mysqli_query($mysqli, "INSERT INTO requestitem1(name, quantity,phone,dept,rname,rdate) 
		VALUES('$name','$quantity','$phone','$dept','$rname','$rdate')");
		
		//display success message
		echo "<font color='green'>Record registration is successfull.";
}	
?>