<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");



if(isset($_POST['Submit'])) {


	$code = mysqli_real_escape_string($mysqli, $_POST['code']);
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$dept = mysqli_real_escape_string($mysqli, $_POST['dept']);
	$appv = mysqli_real_escape_string($mysqli, $_POST['appv']);
	$qa = mysqli_real_escape_string($mysqli, $_POST['consult_fee']);
	$qis = mysqli_real_escape_string($mysqli, $_POST['glass_fee']);
	$adate = mysqli_real_escape_string($mysqli, $_POST['adate']);
    $total = mysqli_real_escape_string($mysqli, $_POST['total']);
	
		
	
	$result = mysqli_query($mysqli, "INSERT INTO approveditem(name,dept,appv,adate,qis,qa,total) 
		VALUES('$name','$dept','$appv','$adate','$qis','$qa','$total')");
		
		//display success message
		if  (mysqli_query($mysqli, $result) === false) {
    echo "Record inserted into approve item, successfully";
} else {
    echo "Error inserted into approved item, not successful: " . $conn->error;
}
		
		
		
		
		$update="update stock1 set slevel='".$total."' where id='".$id."'";
     mysqli_query($mysqli, $update) or die(mysqli_error());
    echo '<p style="color:#FF0000;">"Record Updated Successfully.</a>"';
		echo "<br/><a href='http://localhost/simpletemplate/index.html'>Home</a>";
	

		
$result = mysqli_query($mysqli, "DELETE FROM requestitem WHERE code = $code");
 if  (mysqli_query($mysqli, "DELETE FROM requestitem WHERE code = $code") === TRUE) 
 
 {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

 
 


	
	}






?>

</body>
</html>
